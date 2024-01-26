<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix("dashboard")->name("dashboard.")
    ->controller(DashboardController::class)
    ->middleware(["auth", "admin"])
    ->group(function () {
        Route::get("/", "index")->name("index");
        Route::resource("dish", DishController::class)->except('show');
        Route::resource("user", UserController::class);
        Route::resource("restaurant", RestaurantController::class)->except('show');
        Route::resource("category", CategoryController::class);
    });

Route::get("restaurant/{restaurant}", [RestaurantController::class, 'show'])
    ->name("restaurant.show")
    ->middleware('auth');

Route::get("subscribe/{price}", [UserController::class, 'subscribe'])
    ->name("subscribe")
    ->middleware('auth');

Route::get('pricing', function () {
    return view('pricing.index');
})->name('pricing.index');

Route::prefix("auth")->name("auth.")->controller(AuthController::class)->group(function () {
    Route::get("/login", "loginView")->name("login")->middleware("guest");
    Route::post("/login", "login");
    Route::get("/signin", "signinView")->name("signin")->middleware("guest");
    Route::post("/signin", "signin");
    Route::get("/logout", "logout")->name("logout")->middleware("auth");
});

Route::get('/', function () {
    $dishes = Dish::all();
    return view('index', ['dishes' => $dishes]);
})->name('home.index');

Route::get('/restaurant', function () {
    $dishes = Dish::all();
    return view('restaurant', ['dishes' => $dishes, 'restaurants' => Restaurant::all()]);
})->name('home.restaurant');

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DishController;
use App\Models\Dishes;
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

Route::prefix("dashboard")->name("dashboard.")->controller(DashboardController::class)->middleware("auth")->group(function () {
    Route::get("/", "index")->name("index");
});
Route::prefix("dish")->name("dish.")->controller(DishController::class)->group(function () {
    Route::get("/", "index")->name("index");
    Route::get("/create", "create")->name("create");
    Route::get("/edit", "edit")->name("edit");
});

Route::prefix("admin")->name("admin.")->controller(AdminController::class)->group(function () {
    Route::get("/", function () {
        return to_route("admin.login");
    })->name("base");

    Route::get("/login", "loginView")->name("login");
    Route::get("/signin", "signinView")->name("signin");
    Route::post("/login", "login");
    Route::post("/signin", "signin");
});

Route::prefix("auth")->name("auth.")->controller(AuthController::class)->group(function () {
    Route::get("/login", "loginView")->name("login");
    Route::post("/login", "login");
    Route::get("/signin", "signinView")->name("signin");
    Route::post("/signin", "signin");
    Route::get("/logout", "logout")->name("logout");
});

Route::get('/', function () {
    $dishes = Dishes::all();
    return view('index', ['dishes' => $dishes]);
})->name('home.index');

Route::get('/restaurant', function () {
    $dishes = Dishes::all();
    return view('index', ['dishes' => $dishes]);
})->name('home.restaurant');

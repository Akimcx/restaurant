<?php

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

Route::prefix("create")->name('create.')->group(function () {
    Route::get("dish", function () {
        $dish = new Dishes();
        $dish->dish_title = "Houlihans Mini Cheeseburger";
        $dish->dish_slogan = "Creekstone Farms, where no antibiotics or growth hormones are used";
        $dish->dish_price = 2255;
        dd($dish);
        return view("admin.createDish");
    })->name("dish");
});

Route::prefix("read")->name("read.")->group(function () {
    Route::get("dishes", function () {
        $dish = Dishes::all();
        return $dish;
    })->name("dish");

    Route::get("restaurent", function () {
        $restaurents = "";
        return $restaurents;
    })->name("restaurent");
});

Route::prefix("admin")->name("admin.")->group(function () {
    Route::get("/", function () {
        return to_route("admin.index");
    })->name("base");

    Route::get("/index", function () {
        return view("admin.index");
    })->name("index");
});

Route::get('/', function () {
    $dishes = Dishes::all();
    return view('index', ['dishes' => $dishes]);
})->name('restaurent.index');

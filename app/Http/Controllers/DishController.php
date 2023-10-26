<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;

class DishController extends Controller
{
    public function index(): View
    {
        $dishes = Dishes::paginate(10);
        return view("admin.allDishes", [
            "dishes" => $dishes
        ]);
    }

    public function create(): View
    {
        return view("admin.createDish");
    }

    public function edit(Dishes $dishes): View
    {
        return view("admin.editDish", ["dish", $dishes]);
    }
}

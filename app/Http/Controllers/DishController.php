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
        $dishes = Dishes::paginate(2);
        return view("dish.show", [
            "dishes" => $dishes
        ]);
    }
}

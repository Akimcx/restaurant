<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        // dd((Auth::user()->role & 1) === 1);
        return view("dashboard.index", [
            "restaurants_count" => DB::table('restaurants')->count(),
            "dishes_count" => DB::table('dishes')->count(),
            "users_count" => DB::table('users')->count(),
            "orders_count" => DB::table('orders')->count(),
        ]);
    }
}

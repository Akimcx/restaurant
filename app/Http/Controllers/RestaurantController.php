<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("dashboard.restaurant.index",[
            'restaurants' => Restaurant::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("dashboard.restaurant.create",[
            "categories"=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        // dd($request->validated());
        $res = Restaurant::create($request->validated());
        // dd($res);
        return to_route('dashboard.restaurant.index')
        ->with('success','Le restaurant' . $res->name . ' a ete creer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurants)
    {
        //
    }
}

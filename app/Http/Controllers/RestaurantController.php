<?php

namespace App\Http\Controllers;

use App\Enum\Roles;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("dashboard.restaurant.index", [
            'restaurants' => Restaurant::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("dashboard.restaurant.create", [
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        $data = $request->validated();
        /** @var UploadedFile $image */
        $image = $request->validated('file');

        $data['image'] = $image
            ->store('restaurants', 'public');

        /** @var Model $res */
        $res = Restaurant::create($data);
        // dd($data);
        $res->categories()->attach($data['category_id']);
        // dd($res);
        return to_route('dashboard.restaurant.index')
            ->with('success', 'Le restaurant' . $res->name . ' a ete creer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant): View
    {
        return view('dashboard.restaurant.show', [
            'restaurant' => $restaurant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant): View
    {
        // dd($restaurant->categories()->detach());
        return view("dashboard.restaurant.edit", [
            'restaurant' => $restaurant
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $data = $request->validated();
        /** @var UploadedFile|null $image */
        $image = $request->validated('file');

        if ($image !== null) {
            $data['image'] = $image
                ->store('restaurants', 'public');
        }

        $restaurant->categories()->detach();
        $restaurant->categories()->attach($data['category_id']);
        $restaurant->update($data);
        // dd($restaurant->categories);
        return to_route('dashboard.restaurant.index')
            ->with('success', 'Le restaurant' . $restaurant->name . ' a ete creer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurants)
    {
        //
    }
}

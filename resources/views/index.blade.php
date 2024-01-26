@extends('base')
@section('title', 'Foodie Restauarants')
@section('content')
    <section
        class="hero relative z-20 bg-hero bg-cover py-20 text-white before:absolute before:inset-0 before:-z-10 before:bg-gray-900 before:opacity-50 before:content-['']">
        <div class="container text-center">
            <h1 class="pb-1 text-5xl">Food Order Website</h1>
            <h3 class="pb-1">Top restaurants and specials in town</h3>
            <form class="flex justify-center gap-1">
                <input type="text" name="search"
                    class="mt-1 rounded-md border border-slate-300 px-3 py-2 text-black placeholder-slate-400 shadow-sm focus:border-link-500 focus:outline-none focus:ring-1 focus:ring-link-500 sm:text-sm"
                    placeholder="I would like to eat..." />
                <button type="button" class="rounded-full bg-link-500 px-3 font-semibold">Search food</button>
            </form>
        </div>
    </section>
    <section class="popular mt-20">
        <div class="container">
            <div class="title-wrapper mb-4">
                <h2 class="title text-5xl font-bold">Best Seller</h2>
                <p class="sub-title text-base text-gray-500">Our top selling dishes this month</p>
            </div>
            <div class="row">
                @forelse ($dishes as $dish)
                    <p>
                        <img src="{{ $dish->img }}" alt="{{ $dish->name }}">
                    </p>
                @empty
                    <p>No dishes</p>
                @endforelse
            </div>
        </div>
    </section>
    <section class="mt-20" id="section">
        <div class="container">
            <div class="sectionIntro">
                <div class="headerInfo text-center">
                    <h2 class="title text-2xl font-bold">Our unique story since 1996</h2>
                    <p class="sub-title text-sm text-gray-600">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias eaque fugiat
                        recusandae suscipit, ipsam ullam, voluptatum odio itaque quo perferendis cupiditate modi alias
                        tempore harum.
                    </p>
                </div>
            </div>
            <div class="sectionData grid grid-cols-2 gap-4">
                <div class="leftImg">
                    <img src='assets/img10.jpg' alt="Food Image">
                </div>
                <div class="rightImgs grid grid-cols-2 gap-4">
                    <div class="rightImg">
                        <img src='assets/img4.jpg' alt="Food Image">
                    </div>
                    <div class="rightImg">
                        <img src="assets/img1.jpg" alt="Food Image">
                    </div>
                    <div class="rightImg">
                        <img src="assets/img12.jpg" alt="Food Image">
                    </div>
                    <div class="rightImg">
                        <img src="assets/img5.jpg" alt="Food Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-block pull-left">
                        <h4 class="title">Featured restaurants</h4>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="restaurants-filter pull-right">
                        <nav class="primary pull-left">
                            <ul>
                                <li><a href="#" class="active" data-filter="*">all</a> </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="restaurant-listing">
                </div>
            </div>
        </div>
    </section>
@endsection

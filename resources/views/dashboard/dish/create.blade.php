@extends('dashboard.base')
@section('title', 'Create Dish')
@section('content')
    <div class="container">
        @if ($restaurants?->first())
            <h3 class="font-semibold text-xl text-link-500">Create a dish</h3>
            <hr>
            @include('dashboard.dish.form')
        @else
            <div class="card">
                <h3 class="text-center font-semibold text-xl mb-10">You have no registred restaurants</h3>
                <div class="flex gap-4 items-center justify-center">
                    <a class="font-semibold bg-link-500 p-2 text-white rounded-lg hover:bg-link-900"
                        href="{{ route('dashboard.restaurant.create') }}">Create a restaurant</a>
                    <a class="text-center font-semibold bg-white p-2 text-header rounded-lg outline-1 outline hover:bg-header hover:text-white"
                        href="{{ route('dashboard.dish.index') }}">Go Back</a>
                </div>
            </div>
        @endif
    </div>
@endsection

@extends('dashboard.base')
@section('title', 'Create Dish')
@section('content')
    <div class="container">
        {{-- <x-error-list></x-error-list> --}}
        @if (!$restaurants->isEmpty())
            <h3 class="text-xl font-semibold text-link-500">Create a dish</h3>
            <hr>
            <form class="card mt-4 grid grid-cols-2 gap-4" action="{{ route('dashboard.dish.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <x-form.input label='Name'></x-form.input>
                <x-form.input label='Description'></x-form.input>
                <x-form.input label='Price' type="number"></x-form.input>
                <x-form.input class="pt-4" label="Image" type="file" accept="image/*" name="img"></x-form.input>
                <div class="col-span-2 bg-inherit">
                    <x-form.select label='Réstaurant' name="restaurant_id">
                        <option value="">--Choisir--</option>
                        @foreach ($restaurants as $restaurant)
                            <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                        @endforeach
                    </x-form.select>
                </div>
                <x-button.primary>
                    @if ($dish->exists)
                        Modifier
                    @else
                        Créer
                    @endif
                </x-button.primary>
                <x-button.secondary link href="{{ route('dashboard.dish.index') }}"></x-button.secondary>
            </form>
        @else
            <div class="card">
                <h3 class="mb-10 text-center text-xl font-semibold">You have no registred restaurants</h3>
                <div class="flex items-center justify-center gap-4">
                    <a class="rounded-lg bg-link-500 p-2 font-semibold text-white hover:bg-link-900"
                        href="{{ route('dashboard.restaurant.create') }}">Create a restaurant</a>
                    <a class="rounded-lg bg-white p-2 text-center font-semibold text-header outline outline-1 hover:bg-header hover:text-white"
                        href="{{ route('dashboard.dish.index') }}">Go Back</a>
                </div>
            </div>
        @endif
    </div>
@endsection

@extends('dashboard.base')
@section('title', 'Afficher un réstaurant')
@section('content')
    <div class="container">
        <div class="card mb-16 mt-4">
            <h4 class="mb-1 rounded-md bg-link-500 p-1 text-center text-white">{{ $restaurant->name }}</h4>
            <hr>
            <p class="mt-4">
                <img src="/storage/{{ $restaurant->image }}" alt="">
            </p>
            <p>
                {{ $restaurant->name }}
            </p>
            <p class="flex items-center">
                <x-icon.mail></x-icon.mail>
                {{ $restaurant->email }}
            </p>
            <p class="flex items-center">
                <x-icon.phone></x-icon.phone>
                +509 {{ $restaurant->phone }}
            </p>
            <p>
                {{-- <x-icon.url></x-icon.url> --}}
                {{ $restaurant->url }}
            </p>
            <div>
                <p>Horaire</p>
                <p>Heures: {{ $restaurant->open_hours }} - {{ $restaurant->close_hours }}</p>
                <p>Jours: {{ $restaurant->open_days }}</p>
            </div>
            <div>
                <p>Categorie</p>
                <ul>
                    @foreach ($restaurant->categories as $item)
                        <li>{{ $item->name }}</li>
                    @endforeach
                </ul>
            </div>
            <x-form class="mt-4 grid grid-cols-2 gap-4 bg-slate-50">
                <button type="submit" class="rounded bg-link-500 p-1 text-white">Modifier</button>
                {{-- <a class="rounded border border-black p-1 text-center" href="{{ route('dashboard.restaurant.index') }}"
                    class="btn btn-inverse">Cancel</a> --}}
            </x-form>
        </div>
    </div>
@endsection

@extends('base')
@section('title', 'Restaurant')
@section('content')
    <div class="container">
        <section class="mt-4">
            <ul class="relative flex justify-between bg-slate-50">
                <div class="absolute top-1/2 h-1 w-full -translate-y-1/2 rounded-full bg-link-900"></div>
                <li class="z-10 flex gap-2 rounded bg-inherit p-1">
                    <p class="flex h-6 w-6 items-center justify-center rounded-full bg-link-900 text-slate-50">1</p>
                    <a href="{{ route('home.restaurant') }}">
                        Choose Restaurant
                    </a>
                </li>
                <li class="z-10 flex gap-2 rounded bg-inherit p-1">
                    <p class="flex h-6 w-6 items-center justify-center rounded-full bg-link-900 text-slate-50">2</p>
                    <a href="{{ route('home.restaurant') }}">
                        Pick Your favorite food </a>
                </li>
                <li class="z-10 flex gap-2 rounded bg-inherit p-1">
                    <p class="flex h-6 w-6 items-center justify-center rounded-full bg-link-900 text-slate-50">3</p>
                    <a href="{{ route('home.restaurant') }}">
                        Order and Pay online
                    </a>
                </li>
            </ul>
        </section>
        <section class="my-4">
            <x-form class="bg-slate-50 text-link-900">
                <x-form.input label="Search"></x-form.input>
            </x-form>
            <div class="grid gap-4">
                @foreach ($restaurants as $restaurant)
                    <div class="card flex items-center gap-4">
                        <p>
                            <a href="{{ route('restaurant.show', ['restaurant' => $restaurant->id]) }}">
                                <img class="h-full w-20 object-cover" src="/storage/{{ $restaurant->image }}"
                                    alt="{{ $restaurant->name }}"></a>
                        </p>
                        <div>
                            <p class="font-bold hover:underline">
                                <a href="{{ route('restaurant.show', ['restaurant' => $restaurant->id]) }}">
                                    {{ $restaurant->name }}
                                </a>
                            </p>
                            <p class="text-gray-400">
                                {{ $restaurant->address }}
                            </p>
                        </div>
                        <x-button.primary class="ml-auto">View Menu</x-button.primary>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection

@extends('dashboard.base')
@section('title', 'Créer un réstaurant')
@section('content')
    <div class="container">
        <div class="card mb-16 mt-4">
            <h4 class="mb-1 rounded-md bg-link-500 p-1 text-center text-white">{{ $restaurant->name }}</h4>
            <hr>
            <form action='{{ route('dashboard.restaurant.update', ['restaurant' => $restaurant->id]) }}' method='post'
                enctype="multipart/form-data" class="mt-4 grid grid-cols-2 gap-4 bg-white">
                @method('put')
                @csrf
                <x-form.input label="Name" value="{{ $restaurant->name }}" />
                <x-form.input label="Email" value="{{ $restaurant->email }}" />
                <x-form.input label="Phone" value="{{ $restaurant->phone }}" />
                <x-form.input label="URL" type="url" value="{{ $restaurant->url }}" />
                <x-form.select label="Heure d'ouverture" name="open_hours">
                    <option value="">--Choisir--</option>
                    @foreach (['6am', '7am', '8am', '9am', '10am', '11am'] as $item)
                        <option @selected($restaurant->open_hours === $item) value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </x-form.select>
                <x-form.select label="Heure de fermeture" name="close_hours">
                    <option>--Choisir--</option>
                    @foreach (['3pm', '4pm', '5pm', '6pm', '7pm', '8pm'] as $item)
                        <option @selected($restaurant->close_hours === $item) value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </x-form.select>
                <x-form.select label="Open Days" name="open_days">
                    <option>--Choisir--</option>
                    @foreach (['mon-tue', 'mon-wed', 'mon-thu', 'mon-fri', 'mon-sat', '24hr-x7'] as $item)
                        <option @selected($restaurant->open_days === $item) value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </x-form.select>
                <x-form.input class="pt-4" label="Image" type="file" accept="image/*" name="file"
                    value="C:\fakepath/storage/{{ $restaurant->image }}"></x-form.input>
                <x-form.select label="Select Category" name="category_id">
                    <option>--Choisir--</option>
                    @foreach (App\Models\Category::all() as $category)
                        <option @selected($restaurant->categories->contains($category)) value="{{ $category->id }}">{{ $category->name }}
                        </option>
                    @endforeach
                </x-form.select>
                <x-form.textarea label="Store Address" name="address">
                    {{ $restaurant->address }}
                </x-form.textarea>
                <button type="submit" class="rounded bg-link-500 p-1 text-white">Modifier</button>
                <a class="rounded border border-black p-1 text-center" href="{{ route('dashboard.restaurant.index') }}"
                    class="btn btn-inverse">Cancel</a>
            </form>
        </div>
    </div>
@endsection

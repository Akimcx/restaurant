@php
    $name = $dish->exists ? $dish->name : old('name');
    $description = $dish->exists ? $dish->description : old('description');
    $price = $dish->exists ? $dish->price : old('price');
    $action = $dish->exists ? route('dashboard.dish.update') : route('dashboard.dish.create');
@endphp
{{-- @dump($action) --}}
<form class="card mt-4 grid grid-cols-2 gap-4" action="{{ $action }}">
    <x-form.input label='Name' holder='Name' id='name' name='name' value="{{ $name }}" />
    <x-form.input label='Description' holder='Description' id='description' name='description'
        value="{{ $description }}" />
    <x-form.input label='Price' holder='Price' id='price' name='price' type="number"
        value="{{ $price }}" />
    <x-form.input class="pt-4" label="Image" type="file" name="dish_img"></x-form.input>
    <div class="col-span-2 bg-inherit">
        <x-form.select multiple label='Réstaurant' name="restaurant_id">
            @foreach ($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
            @endforeach
        </x-form.select>
    </div>
    <button class="rounded-lg bg-link-500 p-2 font-semibold text-white hover:bg-link-900" type="submit">
        @if ($dish->exists)
            Modifier
        @else
            Créer
        @endif
    </button>
    <a href="{{ route('dashboard.dish.index') }}"
        class="rounded-lg bg-white p-2 text-center font-semibold text-header outline outline-1 hover:bg-header hover:text-white">
        Annuler
    </a>
</form>

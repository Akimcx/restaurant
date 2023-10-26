@php
    $name = $dish->exists ? $dish->name : old('name');
    $description = $dish->exists ? $dish->description : old('description');
    $price = $dish->exists ? $dish->price : old('price');
    $action = $dish->exists ? route('dashboard.dish.update') : route('dashboard.dish.create');
@endphp
{{-- @dump($action) --}}
<form class="card mt-4 grid gap-4 grid-cols-2" action="{{ $action }}">
    <x-forms.input label='Name' holder='Name' id='name' name='name' value="{{ $name }}" />
    <x-forms.input label='Description' holder='Description' id='description' name='description'
        value="{{ $description }}" />
    <x-forms.input label='Price' holder='Price' id='price' name='price' type="number"
        value="{{ $price }}" />
    <div class="form-group has-danger">
        <label for="dish_img">Image</label>
        <input type="file" name="dish_img" id="dish_img">
    </div>
    <div class="col-span-2 border-2 border-header rounded-xl p-1">
        <label for="restaurant">Select Category</label>
        <select id="restaurant" name="restaurant_id" class="w-full p-1">
            <option>--Select Restaurant--</option>
            @foreach ($restaurants as $restaurant)
            @endforeach
        </select>
    </div>
    <button class="font-semibold bg-link-500 p-2 text-white rounded-lg hover:bg-link-900" type="submit">
        @if ($dish->exists)
            Update
        @else
            Create
        @endif
    </button>
    <a href="{{ route('dashboard.dish.index') }}"
        class="text-center font-semibold bg-white p-2 text-header rounded-lg outline-1 outline hover:bg-header hover:text-white">
        Cancel
    </a>
</form>

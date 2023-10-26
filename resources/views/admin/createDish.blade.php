@extends('base')
@section('title', 'Create a Dish')
@section('script')
    @vite('resources/js/createDish.js')
@endsection
@section('content')
    <div class="container flex items-center justify-center">
        <form class="w-full mt-10 grid gap-4" action="" method="post">
            @include('floatingLabel', [
                'label' => 'Name',
                'holder' => 'Name',
                'id' => 'name',
                'type' => 'text',
            ])
            @include('floatingLabel', [
                'label' => 'Slogan',
                'holder' => 'Slogan',
                'id' => 'slogan',
                'type' => 'text',
            ])
            @include('floatingLabel', [
                'label' => 'Price',
                'holder' => 'Price',
                'id' => 'price',
                'type' => 'number',
            ])
            <div class="relative">
                <select type="text" id="price"
                    class="border-2 block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border-header appearance-none focus:outline-none focus:ring-0 focus:border-link-500 peer">
                    <option value="">Choose an option</option>
                </select>
                <label for="price"
                    class="absolute text-base text-header duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:text-link-500 peer-placeholder-shown:scale-0 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-2">
                    Category
                </label>
            </div>
            <div class="flex items-center justify-center gap-4">
                <div class="shrink-0">
                    <img id="preview" class="h-16 w-16 object-cover rounded-full" src="" {{-- src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" --}}
                        alt="Current dish image" />
                </div>
                <label class="block">
                    <span class="sr-only">Choose profile photo</span>
                    <input type="file" accept="image/png, image/jpeg"
                        class="block w-full text-sm text-slate-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-full file:border-0
                      file:text-sm file:font-semibold
                      file:bg-violet-50 file:text-link-500
                      hover:file:bg-violet-200" />
                </label>
            </div>
            <button class="bg-link-500 p-4 text-white rounded-lg hover:bg-link-900" type="submit">Add</button>
        </form>
    </div>
@endsection

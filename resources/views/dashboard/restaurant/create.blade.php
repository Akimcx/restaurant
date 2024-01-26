@extends('dashboard.base')
@section('title', 'Create restaurant')
@section('content')
    <div class="container">
        <div class="card mb-16 mt-4">
            @if ($categories->isEmpty())
                <p class="text-center font-bold">Aucune catégories</p>
                <a href="{{ route('dashboard.category.create') }}">Ajouter un catégorie</a>
            @else
                <h4 class="mb-1 rounded-md bg-link-500 p-1 text-center text-white">Add Restaurant</h4>
                <hr>
                <form action='{{ route('dashboard.restaurant.store') }}' method='post' enctype="multipart/form-data"
                    class="mt-2 grid grid-cols-2 gap-2">
                    @csrf
                    <x-form.input label="Name" id="name" name="name" holder="Name" />
                    <x-form.input label="Email" id="email" name="email" holder="Email" />
                    <x-form.input label="Phone" id="phone" name="phone" holder="Phone" />
                    <x-form.input label="URL" id="url" name="url" holder="URL" type="url" />

                    <div class="form-group">
                        <label class="control-label">Open Hours</label>
                        <select name="open_hours" class="custom-select" data-placeholder="Choose a Category">
                            <option>--Select your Hours--</option>
                            <option value="6am">6am</option>
                            <option value="7am">7am</option>
                            <option value="8am">8am</option>
                            <option value="9am">9am</option>
                            <option value="10am">10am</option>
                            <option value="11am">11am</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Close Hours</label>
                        <select name="close_hours" class="custom-select" data-placeholder="Choose a Category">
                            <option>--Select your Hours--</option>
                            <option value="3pm">3pm</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                            <option value="6pm">6pm</option>
                            <option value="7pm">7pm</option>
                            <option value="8pm">8pm</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Open Days</label>
                        <select name="open_days" class="custom-select" data-placeholder="Choose a Category" tabindex="1">
                            <option>--Select your Days--</option>
                            <option value="mon-tue">mon-tue</option>
                            <option value="mon-wed">mon-wed</option>
                            <option value="mon-thu">mon-thu</option>
                            <option value="mon-fri">mon-fri</option>
                            <option value="mon-sat">mon-sat</option>
                            <option value="24hr-x7">24hr-x7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input type="file" accept="image/*" name="file" id="lastName" placeholder="12n">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Select Category</label>
                        <select name="category_id" data-placeholder="Choose a Category" tabindex="1">
                            <option>--Select Category--</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label class="">Store Address</label>
                        <textarea name="address" class="border"></textarea>
                    </div>
                    <button type="submit" class="rounded bg-link-500 p-1 text-white">Create</button>
                    <a class="rounded border border-black p-1 text-center" href="{{ route('dashboard.restaurant.index') }}"
                        class="btn btn-inverse">Cancel</a>
                </form>
            @endif

        </div>
    </div>
@endsection

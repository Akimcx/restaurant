@extends('dashboard.base')
@section('title', 'Create restaurant')
@section('content')
    <div class="container">
        <div class="card mt-4 mb-16">
            <h4 class="text-center mb-1 p-1 rounded-md bg-link-500 text-white">Add Restaurant</h4>
            <hr>
            <form action='' method='post' class="mt-2 grid grid-cols-2 gap-2">
                <x-forms.input label="Name" id="name" name="name" holder="Name" />
                <x-forms.input label="Email" id="email" name="email" holder="Email" />
                <x-forms.input label="Phone" id="phone" name="phone" holder="Phone" />
                <x-forms.input label="URL" id="url" name="url" holder="URL" type="url" />

                <div class="form-group">
                    <label class="control-label">Open Hours</label>
                    <select name="o_hr" class="form-control custom-select" data-placeholder="Choose a Category">
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
                    <select name="c_hr" class="form-control custom-select" data-placeholder="Choose a Category">
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
                    <select name="o_days" class="form-control custom-select" data-placeholder="Choose a Category"
                        tabindex="1">
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
                    <input type="file" name="file" id="lastName" class="form-control form-control-danger"
                        placeholder="12n">
                </div>
                <div class="form-group">
                    <label class="control-label">Select Category</label>
                    <select name="c_name" class="form-control custom-select" data-placeholder="Choose a Category"
                        tabindex="1">
                        <option>--Select Category--</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="">Store Address</label>
                    <textarea name="address" type="text" style="height:100px;" class="form-control"></textarea>
                </div>
                <button type="submit" class="">Create</button>
                <a href="{{ route('dashboard.restaurant.index') }}" class="btn btn-inverse">Cancel</a>
            </form>
        </div>
    </div>
@endsection

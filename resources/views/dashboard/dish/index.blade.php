@extends('dashboard.base')
@section('title', 'Dishes')
@section('content')
    <div class="container">
        <div class="card">
            <h4 class="text-xl font-bold">All Menu data</h4>
            <h6 class="text-sm text-gray-600">Export data to Copy, CSV, Excel, PDF & Print</h6>
            <div class="">
                @foreach (['copy', 'csv', 'excel', 'print'] as $btn)
                    <a class="" tabindex="{{ $loop->index }}" href="#">
                        <span>{{ $btn }}</span>
                    </a>
                @endforeach
                <a href="{{ route('dashboard.dish.create') }}">Add dish</a>
            </div>
            <table class="w-full" cellspacing="0">
                <thead>
                    <tr>
                        <th>Restaurant</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dishes as $dish)
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @empty
                        <tr>
                            <td class="">No Dishes</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>Restaurant</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

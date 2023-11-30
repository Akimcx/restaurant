@extends('dashboard.base')
@section('title', 'Restaurants')
@section('content')
        @dump($restaurants)
    <div class="card">
        <section>
            <ul class="flex gap-1">
                <li>CSV</li>
                <li>Excel</li>
                <li>PDF</li>
                <li>Print</li>
            </ul>
            <ul>
                <li><a href="{{route('dashboard.restaurant.create')}}">Ajouter</a></li>
            </ul>
        </section>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Cat</th>
                        <th>Store-Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Url</th>
                        <th>Open Hrs</th>
                        <th>Close Hrs</th>
                        <th>Open Days</th>
                        <th>Address</th>
                        <th>Store-Image</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Cat</th>
                        <th>Store-Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Url</th>

                        <th>Open Hrs</th>
                        <th>Close Hrs</th>
                        <th>Open Days</th>
                        <th>Address</th>
                        <th>Store-Image</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <footer class="footer"> &copy; Copyright 2022 - IsraTech </footer>
@endsection

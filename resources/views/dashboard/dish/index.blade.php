@extends('dashboard.base')
@section('title', 'Dishes')
@section('content')
    <div class="container">
        <div class="card">
            <h4 class="text-xl font-bold">All Menu data</h4>
            <section>
                <h6 class="text-sm text-gray-600">Export data to Copy, CSV, Excel, PDF & Print</h6>
                <ul class="flex gap-2">
                    <li>CSV</li>
                    <li>Excel</li>
                    <li>PDF</li>
                    <li class="ml-auto">
                        <a href="{{ route('dashboard.dish.create') }}">Ajouter</a>
                    </li>
                    <li>Print</li>
                </ul>
            </section>
            <div class="mt-4 overflow-hidden">
                <x-table class="w-full">
                    <x-table.thead>
                        <x-table.tr class="bg-link-900 text-slate-50">
                            <x-table.th>Restaurant</x-table.th>
                            <x-table.th>Name</x-table.th>
                            <x-table.th>Description</x-table.th>
                            <x-table.th>Price</x-table.th>
                            <x-table.th>Image</x-table.th>
                            <x-table.th>Action</x-table.th>
                        </x-table.tr>
                    </x-table.thead>
                    <x-table.tbody>
                        @forelse ($dishes as $dish)
                            <x-table.tr>
                                <td>
                                    {{ $dish->restaurant->name }}
                                </td>
                                <td>{{ $dish->name }}</td>
                                <td>{{ $dish->description }}</td>
                                <td>{{ $dish->price }}</td>
                                <td>
                                    <img class="h-5 w-full object-cover" src="/storage/{{ $dish->img }}">
                                </td>
                                <td class="flex">
                                    <x-icon.edit></x-icon.edit>
                                    <x-icon.delete></x-icon.delete>
                                </td>
                            </x-table.tr>
                        @empty
                            <tr>
                                <td>No Dishes</td>
                            </tr>
                        @endforelse
                    </x-table.tbody>
                </x-table>
            </div>
        </div>
    </div>
@endsection

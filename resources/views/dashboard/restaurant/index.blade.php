@extends('dashboard.base')
@section('title', 'Restaurants')
@section('content')
    <div class="container">
        <section class="mt-4">
            <ul class="flex gap-2">
                <li>CSV</li>
                <li>Excel</li>
                <li>PDF</li>
                <li>Print</li>
                <li class="ml-auto">
                    <a href="{{ route('dashboard.restaurant.create') }}">Ajouter</a>
                </li>
                <li>Print</li>
            </ul>
        </section>
        <section>
            <x-table>
                <x-table.thead>
                    <tr class="whitespace-nowrap bg-link-900 text-slate-50">
                        <th>Nom</th>
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
                </x-table.thead>
                <x-table.tbody>
                    @foreach ($restaurants as $restaurant)
                        <x-table.tr class="whitespace-nowrap">
                            <td>{{ $restaurant->name }}</td>
                            <td>{{ $restaurant->email }}</td>
                            <td>{{ $restaurant->phone }}</td>
                            <td>{{ $restaurant->url }}</td>
                            <td>{{ $restaurant->open_hours }}</td>
                            <td>{{ $restaurant->close_hours }}</td>
                            <td>{{ $restaurant->open_days }}</td>
                            <td>{{ $restaurant->address }}</td>
                            <td>
                                <img class="h-4 w-full object-cover" src="/storage/{{ $restaurant->image }}"
                                    alt="Restaurant picture">
                            </td>
                            <td>{{ $restaurant->created_at->format('D d M Y') }}</td>
                            <td class="flex">
                                <a
                                    href="{{ route('dashboard.restaurant.edit', ['restaurant' => $restaurant->id]) }}"><x-icon.edit></x-icon.edit></a>
                                <x-icon.delete></x-icon.delete>
                                <a href="{{ route('dashboard.restaurant.show', ['restaurant' => $restaurant->id]) }}">
                                    <x-icon.view></x-icon.view>
                                </a>
                            </td>
                        </x-table.tr>
                    @endforeach
                </x-table.tbody>
            </x-table>
        </section>
    </div>
@endsection

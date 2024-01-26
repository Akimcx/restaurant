@extends('dashboard.base')
@section('title', 'Categories')
@section('content')
    <div class="container">
        <section class="mt-4">
            <ul>
                <li><a href="{{ route('dashboard.category.create') }}">Ajouter</a></li>
            </ul>
        </section>
        <div class="card mt-4">
            <table class="w-full">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <button>Modifier</button>
                            </td>
                            <td>
                                <button>Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

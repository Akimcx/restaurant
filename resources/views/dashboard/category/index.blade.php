@extends('dashboard.base')
@section('title', 'Categories')
@section('content')
    <div class="container">
        <div class="card">
            <table>
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
                            <td>{{$category->name}}</td>
                            <button>Modifier</button>
                            <button>Supprimer</button>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

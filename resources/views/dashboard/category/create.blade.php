@extends('dashboard.base')
@section('title', 'Ajouter une catégorie')
@section('content')
    <div class="container">
        @if ($errors)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="card">
            <h4 class="mb-1 rounded-md bg-link-500 p-1 text-center text-white">Ajouter une Catégorie</h4>
            <form class="mt-4" action="{{ route('dashboard.category.store') }}" method="post">
                @csrf
                <x-forms.input holder="Nom" label="Nom" name="name" id="name"></x-forms.input>
                <button class="mt-4 rounded-lg border p-2">Ajouter</button>
                {{-- <button>Ajouter & Fermer</button> --}}
                {{-- <button>Fermer</button> --}}
            </form>
        </div>
    </div>
@endsection

@extends('dashboard.base')
@section('title','Ajouter une catégorie')
@section('content')
<div class="container">
@if ($errors)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>    
@endif
    <div class="card">
        <h4 class="text-center mb-1 p-1 rounded-md bg-link-500 text-white">Ajouter une Catégorie</h4>
        <form action="{{route('dashboard.category.store')}}" method="post">
            @csrf
            <x-forms.input holder="Nom" label="Nom" name="name" id="name"></x-forms.input>
            <button>Ajouter</button>
        </form>
    </div>
</div>
@endsection
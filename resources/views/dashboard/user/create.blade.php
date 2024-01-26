@extends('dashboard.base')
@section('title', 'Ajouter un utilisateur')
@section('content')
    <div class="card">
        <p class="mb-4 rounded bg-link-500 p-2 text-center font-bold text-slate-50">Ajouter un utilisateur</p>
        <x-form class="mt-4 grid grid-cols-2 gap-4 bg-slate-50" action="{{ route('dashboard.user.store') }}" method='post'>
            @csrf
            <x-form.input label="Nom d'utilisateur" name="name"></x-form.input>
            <x-form.input label="Nom" name="first_name"></x-form.input>
            <x-form.input label="Prénom" name="last_name"></x-form.input>
            <x-form.input label="Email" type="email"></x-form.input>
            <x-form.input label="Password" type="password"></x-form.input>
            <x-form.input label="Phone"></x-form.input>
            <x-form.textarea label="Address"></x-form.textarea>
            <div class="col-span-2">
                <x-button.primary>Ajouter</x-button.primary>
                <x-button.secondary link href="{{ route('dashboard.user.index') }}">Annuler</x-button.secondary>
            </div>
        </x-form>
    </div>
@endsection

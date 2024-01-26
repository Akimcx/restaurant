@extends('base')
@section('title', 'Inscription')
@section('content')
    <div class="container mt-10">
        <header class="text-center">
            <h1 class="mb-1 text-5xl font-bold">Inscription</h1>
        </header>
        <section class="mt-4 flex flex-col gap-4">
            <div class="mx-auto h-[150px] w-[150px] rounded-full bg-link-500">
                <img src="/assets/manager.png" />
            </div>
            <x-form class="grid gap-4 bg-slate-50" action="{{ route('auth.signin') }}" method="post">
                @csrf
                <x-form.input id="username" name="name" label="Username" holder="Username" />
                <x-form.input label='Email' holder="Email address" id='email' name='email' type='email' />
                <x-form.input label='Password' holder='Mot de passe' id='password' name='password' type='password' />
                <x-form.input label='Confirm password' holder='Confirmation mot de passe' id='confirm-password'
                    name='password_confirmation' type='password' />
                <button class="col-span-2 rounded-lg bg-link-500 p-4 font-semibold text-white hover:bg-link-900"
                    type="submit">
                    Inscription
                </button>
                <p class="text-gray-600">Déjà inscrit?
                    <a href={{ route('auth.login') }} id="login" class="font-semibold text-link-500">Se connecter</a>
                </p>
            </x-form>
        </section>
    </div>
@endsection

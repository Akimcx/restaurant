@extends('base')
@section('title', 'Se connecter')
@section('content')
    <div class="container mt-10">
        <header class="text-center">
            <h1 class="mb-1 text-5xl font-bold">Se connecter</h1>
        </header>
        <section class="mt-4 flex flex-col gap-4">
            <div class="mx-auto h-[150px] w-[150px] rounded-full bg-link-500">
                <img src="/assets/manager.png" />
            </div>
            <x-form class="grid gap-4 bg-slate-50" action="" method="post">
                @csrf
                <x-form.input label='Email' holder='Email' id='Email' name='email' />
                <x-form.input label='Password' holder='Password' id='password' name='password' type='password' />
                <button
                    class="rounded-lg bg-link-500 p-4 font-semibold text-white hover:bg-link-900 focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-link-500"
                    type="submit">
                    Se connecter
                </button>
                <p class="text-gray-600">
                    Pas encore inscrit?
                    <a href={{ route('auth.signin') }} id="signin" class="font-semibold text-link-500">Créer un
                        compte</a>
                </p>
            </x-form>
        </section>
    </div>
@endsection

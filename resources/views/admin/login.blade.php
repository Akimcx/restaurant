@extends('base')
@section('title', 'Login')
@section('content')
    <div class="container mt-10">
        <header class="text-center">
            <h1 class="text-5xl font-bold mb-1">Administrator</h1>
            <p class="text-base text-gray-500">Login To Dashbord</p>
        </header>
        <section class="flex flex-col gap-4 mt-4">
            <div class="bg-link-500 rounded-full w-[150px] h-[150px] mx-auto">
                <img src="/assets/manager.png" />
            </div>
            <form class="w-10/12 mx-auto grid gap-4 my-10" action="" method="post">
                @csrf
                <x-forms.input label='Email' holder='Email' id='Email' name='email' />
                <x-forms.input label='Password' holder='Password' id='password' name='password' type='password' />
                <button class="font-semibold bg-link-500 p-4 text-white rounded-lg hover:bg-link-900" type="submit">
                    Login
                </button>
                <p class="text-gray-600">
                    Not registered?
                    <a href={{ route('admin.signin') }} id="signin" class="text-link-500 font-semibold">Create an
                        account</a>
                </p>
            </form>
        </section>
    </div>
@endsection

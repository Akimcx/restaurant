@extends('base')
@section('title', 'Admin Sign In')
@section('content')
    <div class="container mt-10">
        <header class="text-center">
            <h1 class="text-5xl font-bold mb-1">Administrator</h1>
            <p class="text-base text-gray-500">Sign In To Dashbord</p>
        </header>
        <section class="flex flex-col gap-4 mt-4">
            <div class="bg-link-500 rounded-full w-[150px] h-[150px] mx-auto">
                <img src="/assets/manager.png" />
            </div>
            <form class="grid w-10/12 mx-auto grid-cols-2 gap-4" action="" method="post">
                @csrf
                <x-forms.input id="username" name="name" label="Username" holder="Username" />
                <x-forms.input label='Email' holder="Email address" id='email' name='email' type='email' />
                <x-forms.input label='Password' holder='Password' id='password' name='password' type='password' />
                <x-forms.input label='Confirm password' holder='Confirm password' id='confirm-password'
                    name='password_confirmation' type='password' />
                <button class="font-semibold col-span-2 bg-link-500 p-4 text-white rounded-lg hover:bg-link-900"
                    type="submit">
                    Sign In
                </button>
                <p class="text-gray-600">Already registered?
                    <a href={{ route('admin.login') }} id="login" class="text-link-500 font-semibold">Log In</a>
                </p>
            </form>
        </section>
    </div>
@endsection

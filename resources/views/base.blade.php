<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    @yield('script')
    @vite('resources/css/app.css')
    {{-- <link href="css/styles.css" rel="stylesheet"> --}}
    {{-- <link href="css/header.css" rel="stylesheet"> --}}
    {{-- <script src="js/index.js" defer></script> --}}
</head>

<body class="home">
    <nav id="header" class="bg-header p-4 sticky top-0 z-50">
        <div class="container flex items-center justify-between">
            <a class="text-white text-2xl" href="/">
                Foodie<span class="text-link-500 font-bold text-4xl">..</span>
            </a>
            <ul class="text-link-500 flex gap-4 items-center">
                <li class="">
                    <a class="nav-link" href={{ route('home.index') }}>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('home.restaurant') }}>Restaurants</a>
                </li>
                @auth
                    <p class="rounded-full bg-link-500 text-white h-[40px] w-[40px]">
                        {{ Illuminate\Support\Facades\Auth::user()->name }}
                    </p>
                    <li class="nav-item"><a href="{{ route('auth.logout') }}" class="nav-link">Logout</a></li>
                @endauth
                @guest

                    <li class="nav-item">
                        <a class="nav-link" href={{ route('auth.login') }}>Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('auth.signin') }}>Sign Up</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    <main class="main">
        @yield('content')
    </main>
</body>

</html>

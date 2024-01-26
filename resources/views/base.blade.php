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
</head>

<body class="flex min-h-screen flex-col">
    <nav id="header" class="sticky top-0 z-50 bg-header p-4">
        <div class="container flex items-center justify-between">
            <x-logo></x-logo>
            <ul class="flex items-center gap-4 text-link-500">
                <li class="">
                    <a class="nav-link" href={{ route('home.index') }}>Acceuil</a>
                </li>
                <li>
                    <a href="{{ route('pricing.index') }}">Forfait</a>
                    {{-- <a href={{ route('pricing.index') }}>Forfait</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('home.restaurant') }}>Restaurants</a>
                </li>
                @auth
                    <p class="h-[40px] w-[40px] rounded-full bg-link-500 text-white">
                        <a href="{{ route('dashboard.index') }}">
                            {{ Illuminate\Support\Facades\Auth::user()->name }}
                        </a>
                    </p>
                    <li class="nav-item"><a href="{{ route('auth.logout') }}" class="nav-link">Logout</a></li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('auth.login') }}>Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('auth.signin') }}>Inscription</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    <main class="main">
        @yield('content')
    </main>
    <footer class='mt-auto flex w-full items-center bg-header p-4 text-slate-200'>
        <div class="container mx-auto flex justify-center">
            &copy; Copyright {{ now()->format('Y') }} - IsraTech
        </div>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title') | Dashboard</title>
    @yield('script')
    @vite('resources/css/app.css')
</head>

<body class="home">
    <header class="bg-white drop-shadow-lg">
        <div class="container flex justify-between items-center">
            <div class="flex items-center justify-center gap-2">
                <svg class="cursor-pointer w-[1.1em]" xmlns="http://www.w3.org/2000/svg" height="1.1em" fill="bg-header"
                    viewBox="0 0 448 512">
                    <path
                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>
                <a href="{{ route('dashboard.index') }}" class="text-link-500 text-xl font-bold">Dashboard</a>
            </div>
            <div class="search relative">
                <input class="border-[1px] block w-full" type="text" id="search">
                <label for="search" class="bg-link-500 absolute top-0 right-0 h-full p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="#fff" viewBox="0 0 512 512">
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                </label>
            </div>
            <div class="logo">
                <p class="rounded-full bg-link-500 text-white h-[40px] w-[40px]">
                    {{ Illuminate\Support\Facades\Auth::user()->name }}
                </p>
            </div>
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="bg-link-500 text-white flex justify-center fixed bottom-0 w-full p-2"> &copy; Copyright 2022 -
        IsraTech
    </footer>
</body>

</html>

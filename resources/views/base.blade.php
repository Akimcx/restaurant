<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    {{-- <link href="css/styles.css" rel="stylesheet"> --}}
    {{-- <link href="css/header.css" rel="stylesheet"> --}}
    {{-- <script src="js/index.js" defer></script> --}}
</head>

<body class="home">
    <nav id="header" class="bg-header p-4 sticky top-0 z-50">
        <div class="container flex items-center justify-between">
            <a class="text-white text-2xl" href="index.php">
                Foodie<span class="text-link font-bold text-4xl">..</span>
            </a>
            <ul class="text-link flex gap-4">
                <li class="">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="restaurants.php">Restaurants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="restaurants.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="restaurants.php">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="main">
        @yield('content')
    </main>
</body>

</html>

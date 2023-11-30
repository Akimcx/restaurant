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
                <li>
                    <a href={{ route('pricing.index') }}>Pricing</a>
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
    <footer class='bg-header text-white'>
        <div class="container grid grid-cols-3 gap-3">
            <div class="flex flex-col">
                <div class="footerLogoDiv">
                    <h3 class="hotelName">
                        Foodie<span>..</span>
                    </h3>
                </div>
                <p>We are a trusted company in unity to provide quality service and food solution to the world around
                    us.</p>
                <div class="footContactDetails">
                    <div class="info">
                        <div class="iconDiv"><i class='bx bx-mail-send'></i></div>
                        <span>support@gmail.com</span>
                    </div>
                    <div class="info">
                        <div class="iconDiv"><i class='bx bxs-phone-outgoing'></i></div>
                        <span>+234 (0) 345589000</span>
                    </div>
                    <div class="info">
                        <div class="iconDiv"><i class='bx bx-current-location'></i></div>
                        <span>Level 14 Willisn Street floor No.41 - Dubai.</span>
                    </div>
                </div>
            </div>
            <div class="">
                <h5>USEFUL LINKS</h5>
                <ul class="flex flex-col">
                    <span>Careers</span>
                    <span>Offers</span>
                    <span>Stuff</span>
                    <span>Outlets</span>
                    <span>Affiliation</span>
                    <span>FAQs</span>
                </ul>
            </div>
            <div class="">
                <h5>OUR SERVICES</h5>
                <ul class="flex flex-col">
                    <span>Online shopping</span>
                    <span>Free Home Delivery</span>
                    <span>Return Money</span>
                    <span>Delivery On Place</span>
                    <span>Wishlist</span>
                    <span>Discount</span>
                </ul>
            </div>
            <div class="flex flex-col">
                <h5> OUR NEWSLETTER</h5>
                <form action="">
                    <label> Subscribe To Our Newsletter...</label>
                    <input type="text" placeholder="Name" required>
                    <input type="email" placeholder="Email" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div>
            &copy; Copyright 2022 - IsraTech
        </div>
    </footer>
</body>

</html>

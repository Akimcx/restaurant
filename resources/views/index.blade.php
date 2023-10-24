@extends('base')
@section('title', 'Foodie Restauarants')
@section('content')
    <section
        class="hero bg-hero bg-cover py-20 relative z-20 text-white
        before:content-['']
        before:bg-gray-900 before:opacity-50 
        before:absolute before:inset-0 before:-z-10">
        <div class="container text-center">
            <h1 class="text-5xl pb-1">Food Order Website</h1>
            <h3 class="pb-1">Top restaurants and specials in town</h3>
            <form class="flex justify-center gap-1">
                <input type="text" name="search"
                    class="text-black mt-1 px-3 py-2 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-link focus:ring-link rounded-md sm:text-sm focus:ring-1"
                    placeholder="I would like to eat..." />
                <button type="button" class="font-semibold rounded-full bg-link px-3">Search food</button>
            </form>
        </div>
    </section>
    <section class="popular mt-20">
        <div class="container">
            <div class="title-wrapper mb-4">
                <h2 class="title text-5xl font-bold">Best Seller</h2>
                <p class="sub-title text-base text-gray-500">Our top selling dishes this month</p>
            </div>
            <div class="row">
                @forelse ($dishes as $dish)
                    <p> {{ $dish->slogan }} </p>
                @empty
                    <p>No dishes</p>
                @endforelse
            </div>
        </div>
    </section>
    <section class="mt-20" id="section">
        <div class="container">
            <div class="sectionIntro">
                <div class="headerInfo text-center">
                    <h2 class="title text-2xl font-bold">Our unique story since 1996</h2>
                    <p class="sub-title text-sm text-gray-600">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias eaque fugiat
                        recusandae suscipit, ipsam ullam, voluptatum odio itaque quo perferendis cupiditate modi alias
                        tempore harum.
                    </p>
                </div>
            </div>
            <div class="sectionData grid gap-4 grid-cols-2">
                <div class="leftImg">
                    <img src='assets/img10.jpg' alt="Food Image">
                </div>
                <div class="rightImgs grid grid-cols-2 gap-4">
                    <div class="rightImg">
                        <img src='assets/img4.jpg' alt="Food Image">
                    </div>
                    <div class="rightImg">
                        <img src="assets/img1.jpg" alt="Food Image">
                    </div>
                    <div class="rightImg">
                        <img src="assets/img12.jpg" alt="Food Image">
                    </div>
                    <div class="rightImg">
                        <img src="assets/img5.jpg" alt="Food Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-restaurants">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-block pull-left">
                        <h4 class="title">Featured restaurants</h4>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="restaurants-filter pull-right">
                        <nav class="primary pull-left">
                            <ul>
                                <li><a href="#" class="active" data-filter="*">all</a> </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="restaurant-listing">
                </div>
            </div>
        </div>
    </section>
    <section class="app-section bg-link p-2 text-white">
        <div class="container flex items-center gap-4 p-4 justify-between">
            <div class="right-image w-4/5">
                <figure>
                    <img src="assets/4.png" alt="Right Image">
                </figure>
            </div>
            <div class="flex flex-col gap-4 justify-around">
                <h3 class="text-4xl font-bold">Download Foodie App</h3>
                <p>
                    You can now find our menu on our mobile applition wherever you are. Make your orders we will find you!
                </p>
                <div class="flex">
                    <a href="#" class="">
                        <div class="pull-left"><i class="fa fa-apple"></i> </div>
                        <div class="pull-right">
                            <span class="text">Available on the</span>
                            <span class="text-2">App Store</span>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="pull-left"><i class="fa fa-android"></i> </div>
                        <div class="pull-right">
                            <span class="text">Available on the</span>
                            <span class="text-2">Play store</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="footerSection">
        <div class="contentContainer container">
            <div class="footerIntro">
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

            <div class="linksDiv">
                <div class="footersectionTitle">
                    <h5>USEFUL LINKS</h5>
                </div>
                <ul>
                    <span>Careers</span>
                    <span>Offers</span>
                    <span>Stuff</span>
                    <span>Outlets</span>
                    <span>Affiliation</span>
                    <span>FAQs</span>
                </ul>
            </div>

            <div class="linksDiv">
                <div class="footersectionTitle">
                    <h5>OUR SERVICES</h5>
                </div>
                <ul>
                    <span>Online shopping</span>
                    <span>Free Home Delivery</span>
                    <span>Return Money</span>
                    <span>Delivery On Place</span>
                    <span>Wishlist</span>
                    <span>Discount</span>
                </ul>
            </div>

            <div class="linksDiv footerForm">
                <div class="footersectionTitle">
                    <h5> OUR NEWSLETTER</h5>
                </div>

                <form action="">
                    <label> Subscribe To Our Newsletter...</label>
                    <input type="text" placeholder="Name" required>
                    <input type="email" placeholder="Email" required>
                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>
        <div class="copyrightDiv">
            &copy; Copyright 2022 - IsraTech
        </div>
    </section>
@endsection

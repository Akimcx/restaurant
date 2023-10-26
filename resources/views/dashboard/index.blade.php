@extends('dashboard.base')
@section('title', 'Dashboard')
@section('content')
    {{-- <div class="container"> --}}
    <nav class="w-[25%] h-full fixed">
        <ul id="sidebarnav" class="flex flex-col">
            <li class="text-2xl font-bold">Home</li>
            <li class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path
                        d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm352-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                </svg>
                <a class="has-arrow" href=""><span class="">Dashboard</span></a>
            </li>
            <li class="text-2xl font-bold">Log</li>
            <li class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path
                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
                <a class="" href="#">Users</a>
                <ul>
                    <li><a href="allusers.php">All Users</a></li>
                    <li><a href="add_users.php">Add Users</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow  " href="#"><span class="hide-menu">Store</span></a>
                <ul>
                    <li><a href="allrestraunt.php">All Stores</a></li>
                    <li><a href="add_category.php">Add Category</a></li>
                    <li><a href="add_restraunt.php">Add Restaurant</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow  " href="#"><span class="hide-menu">Menu</span></a>
                <ul>
                    <li><a href="all_menu.php">All Menues</a></li>
                    <li><a href="add_menu.php">Add Menu</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow  " href="#"><span class="hide-menu">Orders</span></a>
                <ul>
                    <li><a href="all_orders.php">All Orders</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="w-[75%] ml-auto">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Dashboard</h3>

            </div>

        </div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3">
                    <div class="card p-30" style="background: rgb(0, 188, 126);">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-archive f-s-40" style="color: white;"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 style="color: white; font-weight: 700"></h2>
                                <p class="m-b-0" style="color: white;">Stores</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-30" style="background: rgb(0, 188, 126);">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-cutlery f-s-40" aria-hidden="true" style="color: white;"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 style="color: white; font-weight: 700"></h2>
                                <p class="m-b-0" style="color: white;">Dishes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-30" style="background: rgb(0, 188, 126);">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user f-s-40 " style="color: white;"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 style="color: white; font-weight: 700"></h2>
                                <p class="m-b-0" style="color: white;">Customer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-30" style="background: rgb(0, 188, 126);">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-shopping-cart f-s-40" aria-hidden="true"
                                        style="color: white;"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 style="color: white; font-weight: 700"></h2>
                                <p class="m-b-0" style="color: white;">Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer"> &copy; Copyright 2022 - IsraTech </footer>
    </div>
    {{-- </div> --}}
@endsection

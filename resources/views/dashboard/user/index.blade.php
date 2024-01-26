@extends('dashboard.base')
@section('title', 'Users')
@section('content')
    {{-- <div class="header">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- Logo -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <a class="navbar-brand" href="index.php"> Foodie<span>..</span> </a>
                        </a>
                    </div>
                    <!-- End Logo -->
                    <div class="navbar-collapse">
                        <!-- toggle and nav items -->
                        <ul class="navbar-nav mt-md-0 mr-auto">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted"
                                    href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted"
                                    href="javascript:void(0)"><i class="ti-menu"></i></a> </li>


                        </ul>
                        <!-- User profile and search -->
                        <ul class="navbar-nav my-lg-0">

                            <!-- Search -->
                            <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted"
                                    href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search">
                                    <input type="text" class="form-control" placeholder="Search here"> <a
                                        class="srh-btn"><i class="ti-close"></i></a>
                                </form>
                            </li>
                            <!-- Comment -->
                            <li class="nav-item dropdown">

                                <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                    <ul>
                                        <li>
                                            <div class="drop-title">Notifications</div>
                                        </li>

                                        <li>
                                            <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all
                                                    notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- End Comment -->

                            <!-- Profile -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><img src="images/1.jpg" alt="user"
                                        class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                    <ul class="dropdown-user">
                                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div> --}}
    <div class="container">
        <h4 class="mt-4">All Registered users</h4>
        <section>
            <ul class="flex gap-2">
                <li>excel</li>
                <li>csv</li>
                <li class="ml-auto">
                    <a href="{{ route('dashboard.user.create') }}">Ajouter</a>
                </li>
            </ul>
        </section>
        <div class="mt-4">
            <x-table class="">
                <x-table.thead>
                    <x-table.tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Date d'inscription</th>
                        <th>Action</th>
                    </x-table.tr>
                </x-table.thead>
                <x-table.tbody>
                    @foreach ($users as $user)
                        <x-table.tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <select disabled multiple>
                                    @foreach ($user->getRoles() as $item)
                                        <option>{{ $item }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>{{ $user->created_at->format('D d M Y') }}</td>
                            <td class="flex">
                                <x-icon.edit></x-icon.edit>
                                <x-icon.delete></x-icon.delete>
                            </td>
                        </x-table.tr>
                    @endforeach
                </x-table.tbody>
            </x-table>
        </div>
    </div>
@endsection

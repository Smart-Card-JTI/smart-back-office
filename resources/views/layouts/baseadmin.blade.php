@extends('layouts.base')
@section('content')
            <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{url('admin')}}" class="logo">
                        <span>
                            <img src="{{asset('polinema.ico')}}" alt="" class="rounded-circle">
                        </span>
                        <i>
                            
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell noti-icon"></i>
                                {{-- <span class="badge badge-danger badge-pill noti-icon-badge">4</span> --}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                                </div>

                            </div>
                        </li>
                        @guest
                        @else
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle"> <span class="ml-1">{{ Auth::user()->username }} <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="{{route('logout')}}" class="dropdown-item notify-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off"></i> <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                        @endguest

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="user-details">
                    <div class="pull-left">
                        <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="" class="thumb-md rounded-circle">
                    </div>
                    <div class="user-info">
                        <a href="#">{{ Auth::user()->username }}</a>
                        @if(Auth::user()->status==0)
                        <p class="text-muted m-0">Tidak Aktif</p>
                        @else
                        <p class="text-muted m-0">Aktif</p>
                        @endif
                    </div>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Navigation</li>
                        <li>
                            <a href="{{url('admin')}}">
                                <i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/daftar_admin')}}"><i class="mdi mdi-account-multiple-outline"></i> <span> User Management </span> </a>
                        </li>
                        <li>
                            <a href="{{url('admin/daftar_laporan')}}"><i class="mdi mdi-newspaper"></i> <span> Reporting Modul </span> </a>
                        </li>
                        <li>
                            <a href="{{url('admin/daftar_device')}}"><i class="mdi mdi-tablet-ipad"></i> <span> Device Management </span> </a>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Left Sidebar End -->



            @yield('contentadmin')


        </div>
        <!-- END wrapper -->
@endsection
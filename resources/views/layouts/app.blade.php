<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Elif Demir') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <?php if(isset(Auth::user()->name)){ ?>
    <link rel="shortcut icon" href="assets/img/logo.png">

    <!-- App css -->
    <link href="assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    <?php } ?>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                   Elif Demir
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto fxt-switcher-wrap">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" class="fxt-switcher-btn active" href="{{ route('login') }}">{{ __('Giriş') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"  class="fxt-switcher-btn" href="{{ route('register') }}">{{ __('Kayıt') }}</a>
                                </li>
                            @endif
                        @else   
                           <li class="nav-item">
                             {{ Auth::user()->name }}    
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<?php if(isset(Auth::user()->name)){ ?>
 <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="home" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right">Home</span><span>Anasayfa</span></a>
                        </li>


                        <li><a href="task" class=" waves-effect"><i class="bx bx-calendar"></i><span></span>Todo List</a></li>
                        <li>
                                  <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bx bx-lock"></i><span></span>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                       

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
<?php } ?>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<?php if(isset(Auth::user()->name)){ ?>
     <!-- jQuery  -->
    <script src="assets/assets/js/jquery.min.js"></script>
    <script src="assets/assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/assets/js/metismenu.min.js"></script>
    <script src="assets/assets/js/waves.js"></script>
    <script src="assets/assets/js/simplebar.min.js"></script>

    <!-- Morris Js-->
  

    <!-- Morris Custom Js-->
    <script src="assets/assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="assets/assets/js/theme.js"></script>
<?php } ?>
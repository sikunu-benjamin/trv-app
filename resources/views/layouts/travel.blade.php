<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Looking for something amazing?">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="True">
    <title>Sikunu Travel World </title>
    <!-- Edge and IE-->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Add to homescreen for Chrome on Android-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Looking for something amazing?">
    <link rel="icon" sizes="192x192" href="{{ asset('img/touch/chrome-touch-icon-192x192.png') }}">
    <!-- Add to homescreen for Safari on iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Your Travel World">
    <link rel="apple-touch-icon" href="{{ asset('img/touch/apple-touch-icon.png') }}">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700%7CPoppins:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.structure.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link id="cssRtl" rel="stylesheet" href="#">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-stars-o.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blueimp-gallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.min.css') }}">
    <link id="cssTheme" rel="stylesheet" href="{{ asset('skins/style-default.css') }}">
    @yield('css')
</head>
<body class="load">
<div class="progress-load js-progress-load"></div>
<div class="demo-panel bx4dp d-none d-sm-block" id="demoSwitcher">
    <div class="container">
        <div class="demo-panel__toggle btn btn-light text-primary shadow-sm js-panel-toggle"><i class="fa fa-cog"></i></div>
    </div>
    <div class="demo-panel__content bg-light pt-3">
        <div class="container">
            <div class="row flex-nowrap">
                <div class="col-auto mb-2 d-flex align-items-center">
                    <h4>Colors</h4>
                    <div class="demo-panel__colors nav">
                        <a class="nav-link js-toggle-theme is-active" href="#" data-path="{{ asset('skins/style-default.css') }}" role="button"></a>
                        <a class="nav-link js-toggle-theme" href="#" data-path="{{ asset('skins/style-orange.css') }}" role="button"></a>
                        <a class="nav-link js-toggle-theme" href="#" data-path="{{ asset('skins/style-green.css') }}" role="button"></a>
                        <a class="nav-link js-toggle-theme" href="#" data-path="{{ asset('skins/style-red.css') }}" role="button"></a>
                        <a class="nav-link js-toggle-theme" href="#" data-path="{{ asset('skins/style-purple.css') }}" role="button"></a>
                        <a class="nav-link js-toggle-theme" href="#" data-path="{{ asset('skins/style-pink.css') }}" role="button"></a>
                    </div>
                </div>
                <div class="col-auto mb-2 d-flex align-items-center">
                    <h4>RTL</h4>
                    <button class="btn-switch text-primary js-switch-rtl" type="button" data-switch="{{ asset('css/bootstrap-rtl.min.css') }}">
                        <span class="bar bg-primary"></span><span class="toggle bg-secondary"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-account modal" id="modalAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                @guest
                    <ul class="modal-account__tabs nav nav-tabs d-flex js-account-tabs" id="accountTabs" role="tablist">
                        <li class="nav-item w-50">
                            <a class="nav-link" data-toggle="tab" href="#accountLogin" role="tab" aria-controls="accountLogin" aria-selected="false">Login</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link" data-toggle="tab" href="#accountRegist" role="tab" aria-controls="accountRegist" aria-selected="false">Sign Up</a>
                        </li>
                        <li><a class="nav-link p-0 border-0" data-toggle="tab" href="#accountForgot" role="tab" aria-controls="accountForgot" aria-selected="false"></a></li>
                    </ul>
                @else
                    <ul class="modal-account__tabs nav nav-tabs d-flex js-account-tabs" id="accountTabs" role="tablist">
                        <li class="nav-item w-50"><a class="nav-link" data-toggle="tab" href="#accountLogin" role="tab" aria-controls="accountLogin" aria-selected="false">Login</a></li>
                        <li class="nav-item w-50"><a class="nav-link" data-toggle="tab" href="#accountRegist" role="tab" aria-controls="accountRegist" aria-selected="false">Sign Up</a></li>
                        <li><a class="nav-link p-0 border-0" data-toggle="tab" href="#accountForgot" role="tab" aria-controls="accountForgot" aria-selected="false"></a></li>
                    </ul>
                @endguest
                    <button class="btn btn-light close pointer" type="button" data-dismiss="modal" aria-label="close">
                        <span class="icon text-dark" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510">
                                <path d="M255 0C114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255S395.25 0 255 0zm127.5 346.8l-35.7 35.7-91.8-91.8-91.8 91.8-35.7-35.7 91.8-91.8-91.8-91.8 35.7-35.7 91.8 91.8 91.8-91.8 35.7 35.7-91.8 91.8 91.8 91.8z"/>
                            </svg>
                        </span>
                    </button>
                </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane" id="accountLogin" role="tabpanel">
                        <form class="modal-account__form" id="formLogin" action="{{ route('login') }}" method="POST" data-toggle="validator">
                            @csrf
                            <div class="form-group">
                                <input class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email" placeholder="E-mail address" required="required" autocomplete="email" autofocus/>
                                <div class="help-block with-errors"></div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" data-minlength="6" required="required" autocomplete="current-password"/>
                                <div class="help-block">Your password must be at least 6 characters long</div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox"><span class="custom-control-label">Remember me?</span>
                                </label>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <button class="btn btn-secondary btn--round mr-2 mb-2" type="submit">sign in
                                </button>
                                <p class="mb-2"><a class="js-toggle-account" href="#" data-account="forgot">Forgot your password?</a></p>
                            </div>
                            <div class="d-inline-block my-2 w-100">
                                <div class="social-sign">
                                    <div class="divider divider-horizontal">
                                        <h5 class="font-weight-normal mx-2">Or click to sign in</h5>
                                    </div>
                                    <ul class="social-sign__list row">
                                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="{{ asset('img/facebook.png') }}" alt="#"/><span class="nav-text">Connect with Facebook</span></a></li>
                                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="{{ asset('img/google-plus.png') }}" alt="#"/><span class="nav-text">Connect with Google</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer d-block">
                            <p class="fz-small mb-0"><em>By accessing your account, you agree to our  <a href="#">Terms and Conditions</a> and   <a href="#">Privacy Policy</a></em></p>
                        </div>
                    </div>
                    <div class="tab-pane active show" id="accountRegist" role="tabpanel">
                        <form class="modal-account__form" id="formRegist" action="{{ route('register') }}" method="POST" data-toggle="validator">
                            @csrf
                            <div class="form-group">
                                <input class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" type="text" placeholder="First Name" required="required"/>
                                <div class="help-block">Please enter your name</div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="E-mail address" autocomplete="email" required="required"/>
                                <div class="help-block with-errors"></div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm  @error('password') is-invalid @enderror" id="userPass" type="password" name="password" autocomplete="new-password" placeholder="Password" data-minlength="6" required="required"/>
                                <div class="help-block">Your password must be at least 6 characters long</div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="password" name="password_confirmation" placeholder="Confirm Password" data-match="#userPass" required="required"/>
                                <div class="help-block">Please enter the same password as above</div>
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="agreePolicy" type="checkbox" required><span class="custom-control-label">I have read and agree to the  <a href="#">Terms of Use</a> and the  <a href="#">Privacy Policy.</a></span>
                                </label>
                                <div class="help-block">Please accept our policy</div>
                            </div>
                            <p class="mb-4 d-flex justify-content-center justify-content-sm-start">
                                <button class="btn btn-secondary btn--round" type="submit">Create Account</button>
                            </p>
                            <div class="d-inline-block my-2 w-100">
                                <div class="social-sign">
                                    <div class="divider divider-horizontal">
                                        <h5 class="font-weight-normal mx-2">Or click to sign in</h5>
                                    </div>
                                    <ul class="social-sign__list row">
                                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="{{ asset('img/facebook.png') }}" alt="#"/><span class="nav-text">Sign up with Facebook</span></a></li>
                                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="{{ asset('img/google-plus.png') }}" alt="#"/><span class="nav-text">Sign up with Google</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer d-block">
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="dispatchEmail" type="checkbox"><span class="custom-control-label">Please send me Travelocity.com emails with travel deals, special offers, and other information.</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="accountForgot" role="tabpanel">
                        <form class="modal-account__form" id="formForgot" action="{{ route('password.email') }}" method="POST" data-toggle="validator">
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <p class="text-center">We will email you instructions for resetting your password.</p>
                            <p class="d-flex justify-content-center">
                                <button class="btn btn-secondary btn--round" type="submit">Retrieve Password
                                </button>
                            </p>
                            <p class="d-flex justify-content-center"><a class="js-toggle-account mr-3" href="#" data-account="regist">Create a new account</a><a class="js-toggle-account" href="#" data-account="login">Return to Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="page-header">
    <div class="panel-fixed">
        <div class="page-header__top bg-white js-header-top js-top-panel">
            <div class="container">
                <div class="row justify-content-center justify-content-between">
                    <div class="col-12 col-md col-lg-3 d-flex justify-content-center justify-content-md-start">
                        <a class="navbar-logo d-inline-flex align-items-center" href="{{ route('welcome') }}">
                            <img class="img-fluid mr-3" src="{{ asset('img/logo.png') }}" alt="logo"/>
                            <h4 class="m-0">Reform Travel</h4>
                        </a>
                    </div>
                    <div class="col col-lg-6 d-none d-md-flex align-items-center justify-content-center">
                        <a class="page-header__call d-flex align-items-center text-nowrap" href="tel:784706133">
                            <i class="icon icon-call js-tooltip-call mr-3" data-toggle="tooltip" data-placement="bottom" title="Support 78 470 61 33"></i>
                            <div class="page-header__call-right">
                                <div class="title fz-small">Support</div>
                                <div class="phone fw-bold">78-470-61-133</div>
                            </div></a>
                        <div class="page-header__top-search d-none d-lg-block ml-4" id="navbarSearch">
                            <form class="navbar-search" action="#" method="GET">
                                <div class="input-group flex-nowrap">
                                    <input class="form-control pr-0 js-navbar-search-input" type="search" placeholder="Search on site"/>
                                    <div class="input-group-append">
                                        <button class="navbar-search__subject btn btn-light" type="button"><i class="fa fa-search text-gray"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @guest
                    <div class="col col-lg-3 d-none d-md-flex">
                        <ul class="nav nav-panel">
                            <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="login"><i class="text-gray icon icon-user mr-2"></i><span>log in</span></a>
                            </li>
                            <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="regist"><i class="text-gray icon icon-login mr-2"></i><span>sign up</span></a>
                            </li>
                        </ul>
                    </div>
                    @else
                        <div class="col col-lg-3 d-none d-md-flex">
                            <ul class="nav nav-panel">
                                <li class="nav-item d-flex">
                                    <a class="nav-link btn btn-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span>sign out</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                <li class="nav-item d-flex dropdown">
                                    <a class="nav-link btn btn-light text-primary" href="#" data-toggle="dropdown" role="button">
                                        <div class="d-flex align-items-center">
                                            <img class="user-avatar mr-1 rounded-circle" src="{{ asset('img/avatar-face.jpg') }}" alt="#" width="35" height="35"/>
                                            <span>@ {{ mb_substr(Auth::user()->name, 0, 1, "UTF-8") }}</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu py-0 rounded-0">
                                        <a class="d-flex align-items-center justify-content-center p-3" href="{{ route('home') }}">
                                            <span class="text-nowrap">{{ Auth::user()->name }}</span>
                                        </a>
                                        @if(auth()->user()->isAdmin())
                                        <a class="d-flex align-items-center justify-content-center p-3" href="{{ route('admin') }}">
                                            <span class="text-nowrap">Page Admin</span>
                                        </a>
                                        @endif
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <button class="btn-toggle btn btn-light d-lg-none btn-toggle-nav" type="button" data-toggle="collapse" data-target="#navPanel"><span class="icon-bar"></span></button>
    <nav class="main-nav d-flex collapse d-lg-block" id="navPanel">
        <div class="main-nav__container d-flex">
            <div class="container">
                <div class="d-lg-none">
                    <div class="main-nav__search">
                        <form class="navbar-search" action="#" method="GET">
                            <div class="input-group flex-nowrap">
                                <input class="form-control pr-0 js-navbar-search-input" type="search" placeholder="Search on site"/>
                                <div class="input-group-append">
                                    <button class="navbar-search__subject btn btn-light" type="button"><i class="fa fa-search text-gray"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @guest
                    <ul class="nav nav-panel">
                        <li class="nav-item d-flex">
                            <a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="login">
                                <i class="text-gray icon icon-user mr-2"></i>
                                <span>log in</span>
                            </a>
                        </li>
                        <li class="nav-item d-flex">
                            <a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="regist">
                                <i class="text-gray icon icon-login mr-2"></i>
                                <span>sign up</span>
                            </a>
                        </li>
                    </ul>
                    @else
                        <ul class="nav nav-panel">
                            <li class="nav-item d-flex">
                                <a class="nav-link btn btn-light js-toggle-account" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form2').submit();" role="button"><i class="text-gray icon icon-logout mr-2"></i>
                                    <span>sign out</span>
                                </a>
                                <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            <li class="nav-item d-flex dropdown">
                                <a class="nav-link btn btn-light text-primary" href="#" data-toggle="dropdown" role="button">
                                    <div class="d-flex align-items-center">
                                        <img class="user-avatar mr-1 rounded-circle" src="{{ asset('img/avatar-face.jpg') }}" alt="#" width="35" height="35"/>
                                        <span>@ {{ Auth::user()->name }}</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu py-0 rounded-0">
                                    <a class="d-flex align-items-center justify-content-center p-3" href="{{ route('home') }}">
                                        <span class="text-nowrap">{{ Auth::user()->name }}</span>
                                    </a>
                                    <a class="d-flex align-items-center justify-content-center p-3" href="{{ route('admin') }}">
                                        <span class="text-nowrap">Page Admin</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    @endguest
                </div>
                <div class="text-center">
                    <ul class="main-nav__list nav d-flex" id="navMenu">
                        <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="{{ route('welcome') }}"><span>Accueil</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="{{ route('visa') }}"><span>Demarche de visa</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="#"><span>Préinscription</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="{{ route('heberger.index') }}"><span>Hôtel et Hébergement</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="#"><span>Assurance voyage</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="#"><span>Séjours linguistiques</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="#"><span>billet d'avion</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="{{ route('contact') }}"><span>Contact</span></a>
                        <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="{{ route('about') }}"><span>About</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="page-main">
    <div class="container">
        <div class="content mt-3">
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
        </div>
    </div>
    @yield('content')
</main>
<footer class="page-footer">
    <div class="page-footer__cover jarallax" data-speed="0.5"><img class="jarallax-img" src="{{ asset('img/footer.jpg') }}" alt="#"></div>
    <div class="container mb-5 mb-lg-4">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 mt-5">
                <h3 class="h3 text-uppercase">Reform travel</h3>
                <ul class="page-footer__address">
                    <li class="mb-2"><strong class="float-left mr-1">A:</strong>
                        314-336 Bourke St, Melbourne VIC 3000, Australia
                    </li>
                    <li class="mb-2"><strong class="float-left mr-1">P:</strong>
                        24/7 customer support:
                        <a href="tel:784706133">78-470-61-33</a>
                    </li>
                    <li class="mb-2"><strong class="float-left mr-1">E:</strong>
                        <a href="mailto:#">Reformtravel@gmail.com</a>
                    </li>
                </ul>
                <h4 class="h4 mb-2">Follow us:</h4>
                <ul class="footer-social d-flex flex-wrap">
                    <li class="mr-4"><a class="social-link" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="mr-4"><a class="social-link" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="mr-4"><a class="social-link" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li class="mr-4"><a class="social-link" href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <li class="mr-4"><a class="social-link" href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mt-5">
                <h3 class="h3 text-uppercase">info pratique</h3>
                <ul class="page-footer__support list-styled">
                    <li class="mb-2"><a href="#" target="_blank">Faq</a></li>
                    <li class="mb-2"><a href="#" target="_blank">How do I make a reservation?</a></li>
                    <li class="mb-2"><a href="#" target="_blank">Payment options</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}" target="_blank">Contact</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}" target="_blank">About Us</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mt-5">
                <h3 class="h3 text-uppercase">bon plans voyage</h3>
                <ul class="page-footer__support list-styled">
                    <li class="mb-2"><a href="#" target="_blank">Faq</a></li>
                    <li class="mb-2"><a href="#" target="_blank">How do I make a reservation?</a></li>
                    <li class="mb-2"><a href="#" target="_blank">Payment options</a></li>
                    <li class="mb-2"><a href="#" target="_blank">Booking tips</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-footer__copyright text-center">
        <div class="container">
            <div class="hr"></div>ReformTravel ltd. All rights reserved.<br/><a class="text-light text-uppercase" href="#">Copyright by Sikunu
                <script>document.write(new Date().getFullYear());</script></a>
        </div>
    </div>
</footer>
<div class="modal-map modal" id="modalMap" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header align-items-center py-2">
                <h4 class="modal-title"><a class="d-flex align-items-center" href="hotel.html"><i class="icon mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 22.1"><path d="M0.3,10.3C0.3,10.3,0.3,10.3,0.3,10.3c-0.4,0.5-0.4,1.2,0,1.6l10,10c0,0,0,0,0,0c0.4,0.4,1.1,0.4,1.6,0 c0.4-0.4,0.4-1.1,0-1.6l-8-8h26.6c0.6,0,1.1-0.5,1.1-1.1c0,0,0,0,0,0c0-0.6-0.5-1.1-1.1-1.1H3.8l8-8c0.4-0.4,0.4-1.1,0-1.6 c0,0,0,0,0,0c-0.4-0.4-1.1-0.4-1.6,0L0.3,10.3z"/></svg></i><span class="title">Hotel</span></a></h4>
                <button class="btn btn-secondary btn--round px-4" type="button" data-dismiss="modal">map close
                </button>
            </div>
            <div class="map-contain" id="map"></div>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3gFKhVywUkygSxQEBdGVrI5-ZRrdjueA"></script>
<script src="{{ asset('js/maps.js') }}"></script>
<script src="{{ asset('js/libs/moment.min.js') }}"></script>
<script src="{{ asset('js/libs/wNumb.js') }}"></script>
<script src="{{ asset('js/libs/nouislider.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/libs/barba.min.js') }}"></script>
<script src="{{ asset('js/libs/sticky-kit.min.js') }}"></script>
<script src="{{ asset('js/libs/velocity.min.js') }}"></script>
<script src="{{ asset('js/libs/velocity.ui.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/libs/popper.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/libs/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/libs/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/libs/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/libs/ofi.min.js') }}"></script>
<script src="{{ asset('js/libs/jarallax.min.js') }}"></script>
<script src="{{ asset('js/libs/jarallax-video.min.js') }}"></script>
<script src="{{ asset('js/libs/jarallax-element.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.mCustomScrollbar.min.js') }}"></script>
<script src="{{ asset('js/libs/swiper.min.js') }}"></script>
<script src="{{ asset('js/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('js/libs/flatpickr/rangePlugin.js') }}"></script>
<script src="{{ asset('js/libs/select2.min.js') }}"></script>
<script src="{{ asset('js/libs/select2/en.js') }}"></script>
<script src="{{ asset('js/libs/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/libs/validator.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.blueimp-gallery.min.js') }}"></script>
<script src="{{ asset('js/script.min.js') }}"></script>
<script src="{{ asset('js/demo-switcher.js') }}"></script>
@yield('script')
</body>
</html>

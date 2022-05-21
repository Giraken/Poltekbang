@extends('layouts.app')

@section('content')
    <header class="header shadow-sm ">
        <nav class="navbar ">
            <img src="img/logo.jpg" class="logo-navbar">
            <ul class="nav-menu">
                <li class="nav-item">
                    <button class="btn  btn-lg" style="border-radius: 99px;background-color: #5DC3EE;"><a href="#pagehero"
                            class="nav-link-btn">Home</a></button>
                </li>
                <li class="nav-item ">
                    <a href="#2ndpage" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="#3rdpage" class="nav-link">Company</a>
                </li>
                <li class="nav-item">
                    <a href="#4thpage" class="nav-link">Event</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="#5thpage" class="nav-link">Feedback</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>

                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </li>


            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <div class="wrapper">
        <section id="pagehero" class="bg-section1">
            <div class="row align-item-center">
                <div class="col">
                    <h1 class="text-center" style="color: white;margin-top: 60px;font-size:44px">Halo, Selamat <span
                            id="time-text">datang</span>
                        <h1 class="text-center" style="margin-top: -5px;color: white;"> Di Website<span
                                style="color: red;font-size:50px">
                                AirCraft.id</span></h1>
                    </h1>
                </div>
            </div>
        </section>
        <section id="2ndpage">
            <div class="row align-item-center">
                <div class="col">
                    <h1 class="text-center" style="color: black">2nd Page</h1>
                    </h1>
                </div>
            </div>
        </section>
        <section id="3rdpage">
            <div class="row align-item-center">
                <div class="col">
                    <h1 class="text-center" style="color: black">3rd Page</h1>
                    </h1>
                </div>
            </div>
        </section>
        <section id="4thpage">
            <div class="row align-item-center">
                <div class="col">
                    <h1 class="text-center" style="color: black">4th Page</h1>
                    </h1>
                </div>
            </div>
        </section>
        <section id="5thpage">
            <div class="row align-item-center">
                <div class="col">
                    <h1 class="text-center" style="color: black">5th Page</h1>
                    </h1>
                </div>
            </div>
        </section>
    </div>
    <style>
        .bg-section1 {
            background: url("img/hero.jpg");
            background-size: cover;
            height: 100vh;
            position: relative;
            background-attachment: fixed
        }

    </style>
@endsection

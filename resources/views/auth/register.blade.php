<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AirAsia.id') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/filing.js') }}" defer></script>
    <script src="{{ asset('js/rules.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style>
        @media screen and (max-width: 420px) {
            .register-mobile {
                /* height: 100vh;
                background-color: red; */
                padding: 75px 0;
            }

            .logo-1 {
                width: 70%;
                /* background-color: red; */
                margin: 0 auto;
            }

            .logo-2 {
                display: none;
            }
        }

        @media screen and (min-width: 421px) {
            .register-mobile {
                height: 100vh;
                /* background-color: red; */
                padding: 0 0;
            }

            .logo-1 {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar @yield('nav-position') navbar-expand-lg bg-light shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="logo-poltekbang" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link @yield('beranda')" aria-current="page" href="/">Beranda</a>
                        </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @yield('ats-message')" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        ATS Message
                        </a>
                        <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/search">Search ATS Message</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/filed-message">Filed Flight Plane (FPL)</a></li>
                        <li><a class="dropdown-item" href="/delay">Delay (DLA)</a></li>
                        <li><a class="dropdown-item" href="/modification">Modification (CHG)</a></li>
                        <li><a class="dropdown-item" href="/cancellation">Flight Plan Cancellation (CNL)</a></li>
                        <li><a class="dropdown-item" href="/departure">Departure (DEP)</a></li>
                        <li><a class="dropdown-item" href="/arrival">Arrival (ARR)</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/free-text">Free Text ATS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('incoming-message')" href="/incoming-message">Incoming Message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('message-sent')" href="/message-sent">Message Sent</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active @yield('user')" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu text-center dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                            <li><a class="dropdown-item" href="/profil">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{Route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="w-100 position-relative d-flex align-items-center register-mobile" style="">
            <div class="reg container mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card border-0 shadow" style="border-radius: 13px;">
                            <div class="card-body">
                                @if(session()->has('berhasil'))
                                <div class="alert alert-success la la-thumbs-up"> {{session()->get('berhasil')}} </div> @endif
                                <form method="POST" action="{{ route('register') }}" style="font-family: 'Poppins', sans-serif;">
                                    @csrf
                                    <div class="row align-items-center p-3">
                                        <div class="col-4 logo-2">
                                            <img src="img/unnamed.jpg" alt="Logo" style="width:100%;">
                                        </div>

                                        <div class="col">
                                            <h3 style="text-align: center;margin-left:0%;margin-bottom:10%">Flight Plan</h3>
                                            <div class="logo-1">
                                                <img src="img/unnamed.jpg" alt="Logo" style="width:100%">
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="name" placeholder="Masukkan username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                                    style="
                                                    border: none;
                                                    border-bottom: 2px solid black;
                                                    box-sizing: border-box;
                                                    border-radius: 0px;">

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" placeholder="Masukkan email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                                    style="
                                                    border: none;
                                                    border-bottom: 2px solid black;
                                                    box-sizing: border-box;
                                                    border-radius: 0px;">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" placeholder="Masukkan password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                                    style="
                                                    border: none;
                                                    border-bottom: 2px solid black;
                                                    box-sizing: border-box;
                                                    border-radius: 0px;">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">Konfirmasi</label>

                                                <div class="col-md-6">
                                                    <input id="password_confirmation" type="password" placeholder="Masukkan password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password"
                                                    style="
                                                    border: none;
                                                    border-bottom: 2px solid black;
                                                    box-sizing: border-box;
                                                    border-radius: 0px;">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-5">
                                                <label for="no_hp" class="col-md-4 col-form-label text-md-end">{{ __('No. HP') }}</label>

                                                <div class="col-md-6">
                                                    <input id="no_hp" type="text" placeholder="Masukkan nomor" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" required autocomplete="current-no_hp"
                                                    style="
                                                    border: none;
                                                    border-bottom: 2px solid black;
                                                    box-sizing: border-box;
                                                    border-radius: 0px;">

                                                    @error('no_hp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4 d-flex flex-column gap-3 justify-content-center align-items-center">
                                                    <button type="submit" class="btn btn" style="width: 175px; background-color:#FFFFFF;border: 1px solid #000000;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-weight: 600;border-radius:12px">
                                                        {{ __('Create Account') }}
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

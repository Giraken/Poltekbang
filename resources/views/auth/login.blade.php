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
</head>
<body>
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow" style="border-radius: 13px;">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" style="font-family: 'Poppins', sans-serif;">
                            @csrf
                            <div class="row align-items-center p-3">
                                <div class="col-4">
                                    <img src="img/unnamed.jpg" alt="Logo" style="width:120%">
                                </div>

                                <div class="col-8">
                                    @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                        {{ $error }} <br/>
                                        @endforeach
                                    </div>
                                    @endif
                                    <h3 class="text-uppercase" style="text-align: center">Flight Plan</h3>
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

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 55%;">
                                            Forgot Password?
                                        </a>
                                    @endif

                                    <div class="row mb-0" style="margin-top:3%">
                                        <div class="col-md-6 offset-md-4 d-flex flex-column gap-3 align-items-center">
                                            <button type="submit" class="btn btn text-uppercase" style="width: 200px; background-color:#FFFFFF;border: 1px solid #000000;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-weight: 600;border-radius:12px">
                                                {{ __('Login') }}
                                            </button>
                                            <button href="{{ route('register') }}" type="submit" class="btn btn text-uppercase" style="width: 200px; background-color:#FFFFFF;border: 1px solid #000000;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-weight: 600;border-radius:12px">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Create Account') }}</a>
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
</body>

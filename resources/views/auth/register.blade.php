@extends('layouts.app')

@section('content')
<div class="reg container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow" style="border-radius: 13px;">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" style="font-family: 'Poppins', sans-serif;">
                        @csrf
                        <div class="row align-items-center p-3">
                            <div class="col-4">
                                <img src="img/unnamed.jpg" alt="Logo" style="width:100%;">
                            </div>

                            <div class="col-8">
                                <h3 style="text-align: center;margin-left:0%;margin-bottom:10%">Flight Plan</h3>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="name" placeholder="Masukkan username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
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
                                    <label for="password" class="col-md-4 col-form-label text-md-end">Konfirmasi</label>

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

                                <div class="row mb-5">
                                    <label for="nomor telfon" class="col-md-4 col-form-label text-md-end">{{ __('No. HP') }}</label>

                                    <div class="col-md-6">
                                        <input id="nomor telfon" type="nomor telfon" placeholder="Masukkan nomor" class="form-control @error('nomer hp') is-invalid @enderror" name="nomor telfon" required autocomplete="current-nomer telfon"
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

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4 d-flex flex-column gap-3 justify-content-center align-items-center">
                                        <button type="submit" class="btn btn" style="width: 175px; background-color:#FFFFFF;border: 1px solid #000000;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-weight: 600;border-radius:12px">
                                            {{ __('Create Account') }}
                                        </button>
                                        <div class="text-center" style="">
                                            <p style="font-weight: 600;">Have Account?<br><a class="btn btn-link" href="{{ route('login') }}" style="margin-top: -10px; font-weight: 600">
                                                {{ __('Login Now') }}
                                            </a></p>

                                        </div>
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
@endsection

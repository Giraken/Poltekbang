@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 1px solid #000000;border-radius: 13px;margin-top:20%">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <img src="img/unnamed.jpg" alt="Logo" style="width:115%;margin-top:55%">
                            </div>

                            <div class="col-8">
                                <h3 style="text-align: center;margin-left:10%;margin-bottom:10%">Flight Plan</h3>
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

                                <div class="row mb-3">
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
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn" style="margin-top: 5%;margin-left:15%;background-color:#FFFFFF;border: 1px solid #000000;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-weight: 600;border-radius:12px">
                                            {{ __('Create Account') }}
                                        </button>
                                    </div>
                                </div>

                                <div style="margin-left:47%">
                                    <p style="margin-top:7%;font-weight: 600">Have Account?</p>
                                    <a class="btn btn-link" href="{{ route('login') }}" style="margin-top:-16%;font-weight: 600">
                                        {{ __('Login Now') }}
                                    </a>
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

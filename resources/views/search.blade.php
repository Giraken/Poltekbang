@extends('layouts.app')
@section('ats-message', 'active')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 1px solid #000000;border-radius: 13px;">
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="row align-items-center p-3">
                            <div class="col">
                                <h3 style="text-align: center">Search ATS Message</h3>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" placeholder="Masukkan username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
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

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 55%;">
                                        Forgot Password?
                                    </a>
                                @endif

                                <div class="row mb-0" style="margin-top:3%">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn" style="width: 70px; background-color:#FFFFFF;border: 1px solid #000000;">
                                            {{ __('View') }}
                                        </button>
                                        <button type="submit" class="btn btn" style="width: 70px; background-color:#FFFFFF;border: 1px solid #000000">
                                            {{ __('Reset') }}
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
@endsection
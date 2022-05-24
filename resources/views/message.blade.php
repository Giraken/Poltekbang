@extends('layouts.app')
@section('ats-message', 'active')
@section('content')
<div class="container mt-5" style="margin-bottom: 10rem;">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card border-0 shadow" style="border-radius: 13px;">
                <div class="card-body">
                    <form method="POST" action="" style="font-family: 'Poppins', sans-serif;">
                        @csrf
                        <div class="row align-items-center p-3">
                            <div class="col">
                                <h3 class="text-uppercase">View AFTN</h3>
                                <hr>
                                {{-- Pesan nya ada di sini --}}
                                {{-- Contoh :
                                FF WADDZTZX WARRZTZX WAAFZQZA WADDZPZX WRRRZPZX WADDZPZX WAAAZPZX
                                240209 WADDZPZX
                                (DLA-LNI923-WADD1050-WARR-DOF/220524) --}}
                                <div class="row mb-2">
                                    <div class="col d-inline-flex gap-2">
                                        <button type="reset" onclick="history.back()" class="btn btn-primary text-white ms-auto" style="">
                                            <i class="bi bi-arrow-left"></i>
                                            {{ __('BACK') }}
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
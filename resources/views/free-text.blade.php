@extends('layouts.app')
@section('ats-message', 'active')
@section('content')
<style>
    @media screen and (max-width: 420px) {
        .custom {
            display: flex !important;
            flex-direction: column !important;
        }

        .custom .col-1,
        .custom .col-2,
        .custom .col-3,
        .custom .col-4,
        .custom .col-5,
        .custom .col-6 {
            width: 100%;
        }
    }
</style>
<div class="position-relative w-100">
    <div class="container mt-5" style="margin-bottom: 20vh;">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card border-0 shadow" style="border-radius: 13px;">
                    <div class="card-body">
                        @if(session()->has('berhasil'))
                        <div class="alert alert-success la la-thumbs-up"> {{session()->get('berhasil')}} </div> @endif
                        <form method="POST" action="{{ route('freeTextPost') }}" style="font-family: 'Poppins', sans-serif;">
                            @csrf
                            <div class="row align-items-center p-3">
                                <div class="col">
                                    <h3 class="text-uppercase">Free Text Message</h3>
                                    <div class="row mb-2">
                                        @if(count($errors) > 0)
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                            {{ $error }} <br/>
                                            @endforeach
                                        </div>
                                        @endif
                                        <div class="col-3 d-inline-flex gap-2">
                                            <button type="submit" class="btn btn-primary text-white">
                                            SEND
                                            </button>
                                            <button type="reset" class="btn btn-warning text-white" style="">
                                                {{ __('RESET') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col mb-3 d-flex align-items-center rounded-3 text-uppercase fw-bold px-3 py-0"
                                    style="color: #6bbf17; background-color: #dffdc3; border: 1px solid; border-color: #6bbf17">
                                        <div class="">
                                            <i class="bi bi-check2 fs-1"></i>
                                        </div>
                                        <div>Aftn Header</div>
                                    </div>
                                    <div class="row mb-3 custom">
                                        <div class="col-3 d-inline-flex align-items-center me-0">
                                            <label for="priority" class="me-2 mb-0 col-form-label fw-bold">{{ __('PRIORITY:') }}</label>
                                            <select name="priority" id="priority" class="p-2 rounded form-select" style="width: 70px;">
                                                <option value="ff">FF</option>
                                                <option value="dd">DD</option>
                                                <option value="gg">GG</option>
                                                <option value="kk">KK</option>
                                                <option value="ss">SS</option>
                                            </select>
                                        </div>
                                        <div class="col-4 d-inline-flex align-items-center me-4">
                                            <label for="filing-time" class="fw-bold me-2 mb-0 col-form-label" style="">{{ __('FILING TIME:') }}</label>
                                            <input name="filing-time" id="filing-time" class="p-2 me-1 rounded form-control" placeholder="DDhhmm" style="width: 120px;">
                                            {{-- <input onclick="resetValue()" class="btn btn-primary text-white" value="Reset" style="width: 75px;"> --}}
                                            <button type="button" onclick="resetValue()" class="btn btn-primary text-white"><i class="bi bi-arrow-counterclockwise"></i></button>
                                        </div>
                                        <div class="col-3 d-inline-flex align-items-center me-4">
                                            <label for="originator" class="fw-bold me-2 mb-0 col-form-label" style="">{{ __('ORIGINATOR:') }}</label>
                                            <input name="originator" id="originator" class="p-2 me-1 rounded form-control" value="{{Auth::user()->name}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row text-uppercase">
                                        <label class="text-uppercase fw-bold" for="address">Address:</label>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 mb-3" style="width: 90%;">

                                        @for($i = 1; $i <= 28; $i++)
                                        <div class="">
                                            <input name="address{{$i}}" id="address{{$i}}" class="p-2 rounded form-control" style="width: 120px">
                                        </div>
                                        @endfor

                                    </div>
                                    <div class="col mb-3 d-flex align-items-center rounded-3 text-uppercase fw-bold px-3 py-0"
                                    style="color: #6bbf17; background-color: #dffdc3; border: 1px solid; border-color: #6bbf17">
                                        <div class="">
                                            <i class="bi bi-check2 fs-1"></i>
                                        </div>
                                        <div>Free Text</div>
                                    </div>
                                    <div class="row mb-3 custom">
                                        <div class="col me-4 fw-bold">
                                            {{-- <label for="amendment" class="me-2 mb-0 col-form-label text-primary">{{ __('AMENDMENT') }}</label> --}}
                                            <textarea class="form-control" id="free-text" name="free-text" style="height: 250px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3 custom">
                                        <div class="col-3 me-4 fw-bold">
                                            <label for="filled-by" class="me-2 mb-0 col-form-label text-primary">{{ __('FILED BY') }}</label>
                                            <input name="filled-by" id="filled-by" class="p-2 rounded form-control">
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
    <div class="position-absolute bottom-0" style="left: 0; right: 0;">
        @include('layouts.footer')
    </div>
</div>
@endsection

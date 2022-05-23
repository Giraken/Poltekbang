@extends('layouts.app')
@section('ats-message', 'active')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card border-0 shadow" style="border-radius: 13px;">
                <div class="card-body">
                    <form method="POST" action="" style="font-family: 'Poppins', sans-serif;">
                        @csrf
                        <div class="row align-items-center p-3">
                            <div class="col">
                                <h3 class="text-uppercase">Flight Plane Cancellation (CNL) Message</h3>
                                <div class="row mb-2">
                                    <div class="col-3 d-inline-flex gap-2">
                                        <button type="submit" class="btn btn-primary text-white">
                                            {{ __('SEND') }}
                                        </button>
                                        <button type="submit" class="btn btn-warning text-white" style="">
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
                                <div class="row mb-3">
                                    <div class="col-3 d-inline-flex align-items-center me-0">
                                        <label for="priority" class="me-2 mb-0 col-form-label fw-bold">{{ __('PRIORITY:') }}</label>
                                        <select name="priority" id="priority" class="p-2 rounded form-select" style="width: 70px;">
                                            <option value="ff">FF</option>
                                        </select>
                                    </div>
                                    <div class="col-3 d-inline-flex align-items-center me-4">
                                        <label for="filling-time" class="fw-bold me-2 mb-0 col-form-label" style="">{{ __('FILING TIME:') }}</label>
                                        <input name="filling-time" id="filling-time" class="p-2 me-1 rounded form-control" placeholder="070925">
                                        <button class="btn btn-primary text-white"><i class="bi bi-arrow-counterclockwise"></i></button>
                                    </div>
                                    <div class="col-3 d-inline-flex align-items-center me-4">
                                        <label for="originator" class="fw-bold me-2 mb-0 col-form-label" style="">{{ __('ORIGINATOR:') }}</label>
                                        <input name="originator" id="originator" class="p-2 me-1 rounded form-control" placeholder="WARRATKP">
                                    </div>
                                </div>
                                <div class="row text-uppercase">
                                    <label class="text-uppercase fw-bold" for="address">Address:</label>
                                </div>
                                <div class="d-flex flex-wrap gap-2 mb-3" style="width: 90%;">
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    <div class="">
                                        <input name="address" id="address" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                </div>
                                <div class="col mb-3 d-flex align-items-center rounded-3 text-uppercase fw-bold px-3 py-0"
                                style="color: #6bbf17; background-color: #dffdc3; border: 1px solid; border-color: #6bbf17">
                                    <div class="">
                                        <i class="bi bi-check2 fs-1"></i>
                                    </div>
                                    <div>Departure (DEP)</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="aircraft-id" class="me-2 mb-0 col-form-label text-primary">{{ __('AIRCRAFT ID') }}</label>
                                        <input name="aircraft-id" id="aircraft-id" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="ssr-mode" class="me-2 mb-0 col-form-label text-primary">{{ __('SSR MODE') }}</label>
                                        <div class="d-inline-flex align-items-center gap-2">
                                            <input name="ssr-mode" id="ssr-mode" class="p-2 w-50 rounded form-control">
                                            <label for="ssr-mode">A</label>
                                        </div>

                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="code" class="me-2 mb-0 col-form-label text-primary">{{ __('CODE') }}</label>
                                        <input name="code" id="code" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="dep-id" class="me-2 mb-0 col-form-label text-primary">{{ __('DEP ID') }}</label>
                                        <input name="dep-id" id="dep-id" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="time" class="me-2 mb-0 col-form-label text-primary">{{ __('TIME') }}</label>
                                        <input name="time" id="time" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="dest-id" class="me-2 mb-0 col-form-label text-primary">{{ __('DEST ID') }}</label>
                                        <input name="dest-id" id="dest-id" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="dof" class="me-2 mb-0 col-form-label text-primary">{{ __('DOF') }}</label>
                                        <input name="dof" id="dof" class="p-2 rounded form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
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
@endsection
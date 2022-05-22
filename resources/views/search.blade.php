@extends('layouts.app')
@section('ats-message', 'active')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow" style="border: 1px solid #000000;border-radius: 13px;">
                <div class="card-body">
                    <form method="POST" action="" style="font-family: 'Poppins', sans-serif;">
                        @csrf
                        <div class="row align-items-center p-3">
                            <div class="col">
                                <h3 style="text-align: center">Search ATS Message</h3>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="msg-type" class="col-md-4 mb-0 col-form-label">{{ __('Type Message') }}</label>
                                        <select name="msg-type" id="msg-type" class="p-2 rounded form-select">
                                            <option value="FPL">FPL</option>
                                            <option value="DLA">DLA</option>
                                            <option value="CHG">CHG</option>
                                            <option value="CNL">CNL</option>
                                            <option value="DEP">DEP</option>
                                            <option value="ARR">ARR</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="originator" class="col-md-4 mb-0 col-form-label">{{ __('Originator') }}</label>
                                        <input name="originator" id="originator" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col">
                                        <label for="aircraft-id" class="col-md-4 mb-0 col-form-label">{{ __('Aircraft ID') }}</label>
                                        <input name="aircraft-id" id="aircraft-id" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col">
                                        <label for="dep" class="col-md-4 mb-0 col-form-label">{{ __('DEP') }}</label>
                                        <input name="dep" id="dep" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col">
                                        <label for="dest" class="col-md-4 mb-0 col-form-label">{{ __('DEST') }}</label>
                                        <input name="dest" id="dest" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col">
                                        <label for="etd" class="col-md-4 mb-0 col-form-label">{{ __('ETD') }}</label>
                                        <input name="etd" id="etd" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col">
                                        <label for="to" class="col-md-4 mb-0 col-form-label">{{ __('TO') }}</label>
                                        <input name="to" id="to" class="p-2 rounded form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="dof" class="me-2 mb-0 col-form-label">{{ __('DOF') }}</label>
                                        <input name="dof" id="dof" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="reg" class="me-2 mb-0 col-form-label">{{ __('REG') }}</label>
                                        <input name="reg" id="reg" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-3 d-inline-flex align-items-center">
                                        <label for="route" class="me-2 mb-0 col-form-label">{{ __('Route') }}</label>
                                        <input name="route" id="route" class="p-2 rounded form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-3 d-inline-flex align-items-center me-4">
                                        <label for="dof" class="me-2 mb-0 col-form-label">{{ __('Type of Flight') }}</label>
                                        <select name="msg-type" id="msg-type" class="p-2 rounded form-select">
                                            <option value="schedule">SCHEDULE</option>
                                        </select>
                                    </div>
                                    <div class="col-3 d-inline-flex align-items-center me-4">
                                        <label for="dof" class="me-2 mb-0 col-form-label">{{ __('Group') }}</label>
                                        <select name="msg-type" id="msg-type" class="p-2 rounded form-select">
                                            <option value="domestic">DOMESTIC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="from" class="fw-bold me-2 mb-0 col-form-label" style="width: 50px;">{{ __('From') }}</label>
                                        <input name="from" id="from" class="p-2 rounded form-control" placeholder="YYYY-MM-DD">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="to" class="fw-bold me-2 mb-0 col-form-label" style="width: 52px;">{{ __('To') }}</label>
                                        <input name="to" id="to" class="p-2 rounded form-control" placeholder="YYYY-MM-DD">
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-3 d-inline-flex gap-2">
                                        <button type="submit" class="btn btn-primary text-white">
                                            {{ __('VIEW') }}
                                        </button>
                                        <button type="submit" class="btn btn-warning text-white" style="">
                                            {{ __('RESET') }}
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
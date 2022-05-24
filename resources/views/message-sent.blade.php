@extends('layouts.app')
@section('message-sent', 'active')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center mb-5">
        <div class="col">
            <div class="card border-0 shadow" style="border-radius: 13px;">
                <div class="card-body">
                    <form method="POST" action="" style="font-family: 'Poppins', sans-serif;">
                        @csrf
                        <div class="row align-items-center p-3">
                            <div class="mb-5">
                                <h3>ATS MESSAGE SENT</h3>
                                <div class="alert alert-warning" role="alert">
                                    Messages will be automatically deleted after 31 days .
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 me-4 fw-bold">
                                        <label for="message-semt" class="me-2 mb-0 col-form-label text-primary"></label>
                                        <div class="row">
                                            <div class="col-1">
                                                <label class="container">
                                                    <input type="checkbox">FPL
                                                </label>
                                            </div>
                                            <div class="col-1">
                                                <label class="container">
                                                    <input type="checkbox">CHG
                                                </label>
                                            </div>
                                            <div class="col-1">
                                                <label class="container">
                                                    <input type="checkbox">DLA
                                                </label>
                                            </div>
                                            <div class="col-1">
                                                <label class="container">
                                                    <input type="checkbox">CNL
                                                </label>
                                            </div>
                                            <div class="col-1">
                                                <label class="container">
                                                    <input type="checkbox">DEP
                                                </label>
                                            </div>
                                            <div class="col-1">
                                                <label class="container">
                                                    <input type="checkbox">ARR
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">
                                                    <input type="checkbox">FREE TEXT
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="aircraft-id" class="me-2 mb-0 col-form-label">{{ __('AIRCRAFT ID :') }}</label>
                                        <input name="aircraft-id" id="aircraft-id" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="dof" class="me-2 mb-0 col-form-label">{{ __('DOF :') }}</label>
                                        <input name="dof" id="dof" type="date" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="aircraft-id" class="me-2 mb-0 col-form-label">{{ __('DEP AD :') }}</label>
                                        <input name="aircraft-id" id="aircraft-id" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="aircraft-id" class="me-2 mb-0 col-form-label">{{ __('DEST AD :') }}</label>
                                        <input name="aircraft-id" id="aircraft-id" class="p-2 rounded form-control">
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-3 d-inline-flex gap-2">
                                        <button type="submit" class="btn btn-primary text-white">
                                            {{ __('VIEW') }}
                                        </button>
                                        <button type="reset" class="btn btn-warning text-white" style="">
                                            {{ __('RESET') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-1">
                                    <p>Search :</p>
                                </div>
                                <div class="col-2">
                                    <form action="/">
                                        <input type="text" name="search">
                                    </form>
                                </div>
                            </div>
                            <div>
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Message Type</th>
                                        <th scope="col">Aircraft ID</th>
                                        <th scope="col">TYPE of Aircraft</th>
                                        <th scope="col">DEP AD</th>
                                        <th scope="col">EOBT</th>
                                        <th scope="col">DEST AD</th>
                                        <th scope="col">DOF/</th>
                                        <th scope="col">REG/</th>
                                        <th scope="col">ARR AD</th>
                                        <th scope="col">ATA</th>
                                        <th scope="col">Free Text</th>
                                        <th scope="col">Time Sending</th>
                                        <th scope="col">Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                        <td>---</td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mb-0">
                                <div class="col-3 d-inline-flex gap-2">
                                    <button type="submit" class="btn btn-success text-white">
                                        {{ __('Export to XLS') }}
                                    </button>
                                    <button type="reset" class="btn btn-primary text-white" style="">
                                        {{ __('Reload') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="message-box" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            {{-- <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5> --}}
            <h3 class="modal-title text-uppercase">View AFTN</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- Pesan nya ada di sini --}}
                {{-- Contoh :
                FF WADDZTZX WARRZTZX WAAFZQZA WADDZPZX WRRRZPZX WADDZPZX WAAAZPZX
                240209 WADDZPZX
                (DLA-LNI923-WADD1050-WARR-DOF/220524) --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
        </div>
    </div>
@endsection

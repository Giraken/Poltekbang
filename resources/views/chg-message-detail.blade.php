@extends('layouts.app')
@section('ats-message', 'active')
@section('content')
<div class="position-relative w-100">
    <div class="container mt-5" style="margin-bottom: 20vh;">
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card border-0 shadow" style="border-radius: 13px;">
                    <div class="card-body">
                        <h3 class="modal-title text-uppercase">View AFTN</h3>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card border-0" style="border-radius: 13px;">
                                    <div class="card-body table-responsive">
                                        <table>
                                            <tr>
                                                <th><b>Originator</b></th>
                                                <th>
                                                    : {{$user->name}}
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>Date/Time</b></th>
                                                <th>
                                                    : {{$data->time}}
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>Aircraft ID</b></th>
                                                <th>
                                                    : {{$data->aircraft_id}}
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>DEP AD</b></th>
                                                <th>
                                                    : {{$data->dep_id}}
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>ATD</b></th>
                                                <th>
                                                    : 
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>DEST AD</b></th>
                                                <th>
                                                    : {{$data->dest_id}}
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>DOF</b></th>
                                                <th>
                                                    : {{$data->dof}}
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>Amendment</b></th>
                                                <th>
                                                    : {{$data->chg_amandement}}
                                                </th>
                                                <th></th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div style="text-align: right">
                            <button class="btn btn-primary" onclick="history.back()">
                                Back
                            </button>
                        </div>
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

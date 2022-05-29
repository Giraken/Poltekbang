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
                                            <thead>
                                            <tr>
                                                <th>(Priority) (Address)</th>
                                            </tr>
                                            <tr>
                                                <th>(Filling Time) (Originator)</th>
                                            </tr>
                                            <tr>
                                                <th>(Type message) (Aircraft id) (Flight rules) (type of flight)</th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

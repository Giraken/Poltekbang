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
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>Date/Time</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>Aircraft ID</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>REG</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>TYPE OF FLIGHT</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>DOF</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>Type</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>DEP AD</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>EOBT</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>Speed</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>Level</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>Route</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>DEST AD</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>EET</b></th>
                                                <th>
                                                    :
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
                                                <th><b>RMK</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>ATA</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>DLA</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>CHG</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th><b>CNL</b></th>
                                                <th>
                                                    :
                                                </th>
                                                <th></th>
                                            </tr>
                                        </table>

                                        {{-- <table>
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
                                                <th>(Type of aircraft)/(WAKE TURB. CAT.)-(Aircraft equipment)/(Surveillance equipment)</th>
                                            </tr>
                                            <tr>
                                                <td>(DEP AD)(EOBT)</td>
                                            </tr>
                                            <tr>
                                                <td>(Cruising speed)(cruising level) (route)</td>
                                            </tr>
                                            <tr>
                                                <th>(DEST AD) (EET) (1st ALTN AD) (2nd ALTN AD)</th>
                                            </tr>
                                            <tr>
                                                <td>(Other information</td>
                                                <td>sts</td>
                                            </tr>
                                            </thead>
                                        </table> --}}
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

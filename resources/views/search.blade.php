@extends('layouts.app')
@section('ats-message', 'active')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center mb-5">
        <div class="col">
            <div class="card border-0 shadow" style="border-radius: 13px;">
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
                                            <option value="CHG">CHG</option>
                                            <option value="DLA">DLA</option>
                                            <option value="CNL">CNL</option>
                                            <option value="DEP">DEP</option>
                                            <option value="ARR">ARR</option>
                                            <option value="all-messages">-- ALL MESSAGES --</option>
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
                                        <input name="etd" type="number" id="etd" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col">
                                        <label for="to" class="col-md-4 mb-0 col-form-label">{{ __('TO') }}</label>
                                        <input name="to" id="to" type="number" class="p-2 rounded form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="dof" class="me-2 mb-0 col-form-label">{{ __('DOF') }}</label>
                                        <input name="dof" id="dof" type="date" class="p-2 rounded form-control">
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
                                        <select name="msg-type" id="msg-type" class="p-2 rounded form-select text-uppercase">
                                            <option value="schedule">Schedule</option>
                                            <option value="non-schedule">Non schedule</option>
                                            <option value="all-types">-- All types --</option>
                                        </select>
                                    </div>
                                    <div class="col-3 d-inline-flex align-items-center me-4">
                                        <label for="dof" class="me-2 mb-0 col-form-label">{{ __('Group') }}</label>
                                        <select name="msg-type" id="msg-type" class="p-2 rounded form-select text-uppercase">
                                            <option value="domestic">Domestic</option>
                                            <option value="overflying">Overflying</option>
                                            <option value="international">international</option>
                                            <option value="all-messages">-- All messages --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="from" class="fw-bold me-2 mb-0 col-form-label" style="width: 50px;">{{ __('From') }}</label>
                                        <input name="from" id="from" type="datetime-local" class="p-2 rounded form-control" placeholder="YYYY-MM-DD">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 d-inline-flex align-items-center me-4">
                                        <label for="to" class="fw-bold me-2 mb-0 col-form-label" style="width: 52px;">{{ __('To') }}</label>
                                        <input name="to" id="to" type="datetime-local" class="p-2 rounded form-control" placeholder="YYYY-MM-DD">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col">
            <div class="card border-0 shadow" style="border-radius: 13px;">
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Originator</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Aircraft ID</th>
                            <th scope="col">REG</th>
                            <th scope="col">TYPE OF FLIGHT</th>
                            <th scope="col">DOF</th>
                            <th scope="col">Type</th>
                            <th scope="col">DEP AD</th>
                            <th scope="col">EOBT</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Level</th>
                            <th scope="col">Route</th>
                            <th scope="col">DEST AD</th>
                            <th scope="col">EET</th>
                            <th scope="col">ATD</th>
                            <th scope="col">RMK</th>
                            <th scope="col">ATA</th>
                            <th scope="col">DLA</th>
                            <th scope="col">CHG</th>
                            <th scope="col">CNL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
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
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                            <td>
                                {{-- <a href="/message" type="button" class="btn btn-dark text-white"><i class="bi bi-search"></i></a> --}}
                                <button data-bs-toggle="modal" data-bs-target="#message-box" type="button" class="btn btn-secondary text-white"><i class="bi bi-search"></i></button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
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
@extends('layouts.app')
@section('incoming-message', 'active')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card border-0 shadow" style="border-radius: 13px;">
                <div class="card-body table-responsive p-5">
                    <h3 class="text-uppercase mb-5 fw-bold">Incoming Messages</h3>
                    <nav>
                        <div class="nav nav-tabs text-black" id="nav-tab" role="tablist">
                          <button class="nav-link text-black active" id="nav-first-tab" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true">WEB Flight Plan</button>
                          <button class="nav-link text-black" id="nav-second-tab" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">AFTN</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="table-responsive tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">TYP</th>
                                    <th scope="col">ACID</th>
                                    <th scope="col">DEP AD</th>
                                    <th scope="col">EOBT</th>
                                    <th scope="col">DEST AD</th>
                                    <th scope="col">DOF</th>
                                    <th scope="col">ARR AD</th>
                                    <th scope="col">ATA</th>
                                    <th scope="col">Originator</th>
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
                                    <td>
                                        {{-- <a href="/message" type="button" class="btn btn-dark text-white"><i class="bi bi-search"></i></a> --}}
                                        <button data-bs-toggle="modal" data-bs-target="#message-box" type="button" class="btn btn-secondary text-white"><i class="bi bi-search"></i></button>
                                    </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab" tabindex="0">2</div>
                      </div>

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
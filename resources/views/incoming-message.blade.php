@extends('layouts.app')
@section('incoming-message', 'active')
@section('content')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<style>
  @media screen and (min-width: 1900px)
  {
    /* .custom-footer {
      display: none;
    } */
  }
</style>

<div class="position-relative w-100">
  <div class="utama container mt-5" style="margin-bottom: 55vh;">
      <div class="row justify-content-center">
          <div class="col-lg-12">
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
                              <table id="yajra-datatable" class="table yajra-datatable" style="width:100%">
                                  <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">TYP</th>
                                      <th scope="col">ACID</th>
                                      <th scope="col">DEP AD</th>
                                      <th scope="col">EOBT</th>
                                      <th scope="col">DEST AD</th>
                                      <th scope="col">DOF</th>
                                      <th scope="col">ARR AD</th>
                                      <th scope="col">ATA</th>
                                      <th scope="col">Originator</th>
                                      <th scope="col">Action</th>
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
  <div class="custom-footer position-absolute bottom-0" style="left: 0; right: 0;">
    @include('layouts.footer')
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
<script type="text/javascript">
$(function () {

          var table = $('.yajra-datatable').DataTable({
              processing: true,
              serverSide: false,
              ajax: "incoming-message/api",
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'type', name: 'messages.type'},
                  {data: 'aircraft_id', name: 'messages.aircraft_id'},
                  {data: 'dep_id', name: 'messages.dep_id'},
                  {data: 'time', name: 'messages.time'},
                  {data: 'dest_id', name: 'messages.dest_id'},
                  {data: 'dof', name: 'messages.dof'},
                  {data: 'arr_id', name: 'messages.arr_id'},
                  {data: 'arr_time', name: 'messages.arr_time'},
                  {data: 'originator', name: 'aftn_header.originator'},
                  {
                      data: 'action',
                      name: 'action',
                      orderable: false,
                      searchable: false
                  },
              ]
          });

        });
</script>
@endsection

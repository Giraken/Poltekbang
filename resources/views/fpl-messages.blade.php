@extends('layouts.app')
@section('ats-message', 'active')
@section('content')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<div class="position-relative w-100">
    <div class="container mt-5" style="margin-bottom: 20vh;">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card border-0 shadow p-3" style="border-radius: 13px;">
                    <h3 class="fw-bold">FPL Messages</h3>
                    <div class="card-body table-responsive">
                        <table id="yajra-datatable" class="table yajra-datatable">
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
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            {{-- INI NANTI MASUKIN KE PALING SAMPING SETELAH SEMUA DATA MUNCUL BUAT DETAIL PESAN DI KOLOM Acton--}}
                                {{-- <th>
                                    <a href="/fpl-message-detail" class="btn btn-dark text-white">
                                        {{ __('Detail') }}
                                    </a>
                                </th> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="position-absolute bottom-0" style="left: 0; right: 0;">
        @include('layouts.footer')
    </div> --}}
{{-- </div>
<div class="modal fade" id="message-box" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
          <h3 class="modal-title text-uppercase">View AFTN</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Pesan nya ada di sini
            Contoh :
            FF WADDZTZX WARRZTZX WAAFZQZA WADDZPZX WRRRZPZX WADDZPZX WAAAZPZX
            240209 WADDZPZX
            (DLA-LNI923-WADD1050-WARR-DOF/220524)
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
    </div>
</div> --}}
<script type="text/javascript">
    function eraseText() {
        document.getElementById("output").value = "";
    }

    $(function () {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: false,
            ajax: "search",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'originator', name: 'aftn_header.originator'},//1
                {data: 'time', name: 'messages.time'},
                {data: 'aircraft_id', name: 'messages.aircraft_id'},
                {data: 'fpl_reg', name: 'messages.fpl_reg'},
                {data: 'fpl_flight_type', name: 'messages.fpl_flight_type'},
                {data: 'dof', name: 'messages.dof'},
                {data: 'type', name: 'messages.type'},
                {data: 'dep_id', name: 'messages.dep_id'},
                {data: 'time', name: 'messages.time'},
                {data: 'fpl_cruising_speed', name: 'messages.fpl_cruising_speed'},//10
                {data: 'fpl_cruising_level', name: 'messages.fpl_cruising_level'},//11
                {data: 'route', name: 'additional_informations.route'},
                {data: 'dest_id', name: 'messages.dest_id'},
                {data: 'fpl_eet', name: 'messages.fpl_eet'},
                {data: null, "defaultContent": ""},
                {data: 'RMK/', name: 'additional_informations.RMK/'},
                {data: 'arr_time', name: 'messages.arr_time'},
                {data: null, "defaultContent": ""},
                {data: null, "defaultContent": ""},
                {data: null, "defaultContent": ""},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]

        });
                    var e = document.getElementById("msg-type");
                    $('#msg-type').on('change', function () {
                    table.columns(7).search( e.value ).draw();
                    });
                    $('#originator').on( 'keyup', function () {
                    table.columns(1).search( this.value ).draw();
                    });
                    $('#aircraft-id').on( 'keyup', function () {
                    table.columns(3).search( this.value ).draw();
                    });
                    $('#dep').on( 'keyup', function () {
                    table.columns(8).search( this.value ).draw();
                    });
                    $('#dest').on( 'keyup', function () {
                    table.columns(13).search( this.value ).draw();
                    });
                    $('#dof').on( 'keyup', function () {
                    table.columns(6).search( this.value ).draw();
                    });
                    $('#reg').on( 'keyup', function () {
                    table.columns(4).search( this.value ).draw();
                    });
                    $('#route').on( 'keyup', function () {
                    table.columns(12).search( this.value ).draw();
                    });
                    var type = document.getElementById("type");
                    $('#type').on('change', function () {
                    table.columns(5).search( type.value ).draw();
                    });
                    // var group = document.getElementById("msg-type");
                    // $('#group').on('change', function () {
                    // table.columns(7).search( group.value ).draw();
                    // });


      });
    </script>
@endsection

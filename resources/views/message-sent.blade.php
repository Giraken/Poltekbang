@extends('layouts.app')
@section('message-sent', 'active')
@section('content')
<style>
    @media screen and (max-width: 420px) {
        .custom {
            display: flex !important;
            flex-direction: column !important;
        }

        .custom .col-1,
        .custom .col-2,
        .custom .col-3,
        .custom .col-4,
        .custom .col-5,
        .custom .col-6 {
            width: 100%;
        }
    }
</style>
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<div class="position-relative w-100">
    <div class="container mt-5" style="margin-bottom: 25vh;">
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card border-0 shadow" style="border-radius: 13px;">
                    <div class="card-body">
                        <form method="get" action="" style="font-family: 'Poppins', sans-serif;">

                            <div class="row align-items-center p-3">
                                <div class="mb-5">
                                    <h3>ATS MESSAGE SENT</h3>
                                    <div class="alert alert-warning" role="alert">
                                        Messages will be automatically deleted after 31 days .
                                    </div>
                                    <div class="row mb-3 custom">
                                        <div class="col-12 me-4 fw-bold">
                                            <label for="message-semt" class="me-2 mb-0 col-form-label text-primary"></label>
                                            <div class="row">
                                                <div class="col-1">
                                                    <div class="d-inline-flex align-items-center gap-1">
                                                        <input class="form-check-input" type="checkbox" name="type" value="FPL" style="width: 30px; height: 30px;">
                                                        <label class="form-check-label" for="inlineCheckbox1">FPL</label>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="d-inline-flex align-items-center gap-1">
                                                        <input class="form-check-input" type="checkbox" name="type" value="CHG" style="width: 30px; height: 30px;">
                                                        <label class="form-check-label" for="inlineCheckbox1">CHG</label>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="d-inline-flex align-items-center gap-1">
                                                        <input class="form-check-input" type="checkbox" name="type" value="DLA" style="width: 30px; height: 30px;">
                                                        <label class="form-check-label" for="inlineCheckbox1">DLA</label>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="d-inline-flex align-items-center gap-1">
                                                        <input class="form-check-input" type="checkbox" name="type" value="CNL" style="width: 30px; height: 30px;">
                                                        <label class="form-check-label" for="inlineCheckbox1">CNL</label>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="d-inline-flex align-items-center gap-1">
                                                        <input class="form-check-input" type="checkbox" name="type" value="DEP" style="width: 30px; height: 30px;">
                                                        <label class="form-check-label" for="inlineCheckbox1">DEP</label>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="d-inline-flex align-items-center gap-1">
                                                        <input class="form-check-input" type="checkbox" name="type" value="ARR" style="width: 30px; height: 30px;">
                                                        <label class="form-check-label" for="inlineCheckbox1">ARR</label>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-inline-flex align-items-center gap-1">
                                                        <input class="form-check-input" type="checkbox" name="type" value="FREETEXT" style="width: 30px; height: 30px;">
                                                        <label class="form-check-label" for="inlineCheckbox1">FREE TEXT</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 custom">
                                        <div class="col-2 d-inline-flex align-items-center me-4">
                                            <label for="aircraft-id" class="me-2 mb-0 col-form-label">{{ __('AIRCRAFT ID :') }}</label>
                                            <input name="aircraft-id" id="aircraft-id" class="p-2 rounded form-control">
                                        </div>
                                        <div class="col-2 d-inline-flex align-items-center me-4">
                                            <label for="dof" class="me-2 mb-0 col-form-label">{{ __('DOF :') }}</label>
                                            <input name="dof" id="dof" type="date" class="p-2 rounded form-control">
                                        </div>
                                        <div class="col-2 d-inline-flex align-items-center me-4">
                                            <label for="dep-ad" class="me-2 mb-0 col-form-label">{{ __('DEP AD :') }}</label>
                                            <input name="dep-ad" id="dep-ad" class="p-2 rounded form-control">
                                        </div>
                                        <div class="col-2 d-inline-flex align-items-center me-4">
                                            <label for="dest-ad" class="me-2 mb-0 col-form-label">{{ __('DEST AD :') }}</label>
                                            <input name="dest-ad" id="dest-ad" class="p-2 rounded form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-3 d-inline-flex gap-2">
                                            <a href="#" class="btn btn-primary text-white">
                                                {{ __('VIEW') }}
                                            </a>
                                            <button class="btn btn-warning text-white" type="reset">
                                                {{ __('RESET') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="table-responsive py-3">
                                    <table id="yajra-datatable" class="table yajra-datatable">
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
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row mt-3 mb-0">
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
    </div>
    <div class="position-absolute bottom-0" style="left: 0; right: 0;">
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

                        $.fn.dataTable.ext.search.push(
                        function( settings, searchData, index, rowData, counter ) {
                        var positions = $('input:checkbox[name="type"]:checked').map(function() {
                            return this.value;
                        }).get();

                        if (positions.length === 0) {
                            return true;
                        }

                        if (positions.indexOf(searchData[1]) !== -1) {
                            return true;
                        }

                        return false;
                        }
                    );
                  var table = $('.yajra-datatable').DataTable({
                      processing: true,
                      serverSide: false,
                      ajax: "message-sent",
                      columns: [
                          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                          {data: 'type', name: 'messages.type'},
                          {data: 'aircraft_id', name: 'messages.aircraft_id'},
                          {data: 'fpl_aircraft_type', name: 'messages.fpl_aircraft_type'},
                          {data: 'dep_id', name: 'messages.dep_id'},
                          {data: 'time', name: 'messages.time'},
                          {data: 'dest_id', name: 'messages.dest_id'},
                          {data: 'dof', name: 'messages.dof'},
                          {data: 'fpl_reg', name: 'messages.fpl_reg'},
                          {data: 'arr_id', name: 'messages.arr_id'},
                          {data: 'arr_time', name: 'messages.arr_time'},
                          {data: 'free_text', name: "messages.free_text"},
                          {data: 'filing_time', name: 'aftn_header.filing_time'},
                          {data: 'fpl_status', name: 'aftn_header.fpl_status'}
                      ]
                  });
                    $('input:checkbox').on('change', function () {
                        table.draw();
                    });
                    $('#aircraft-id').on( 'keyup', function () {
                    table.columns(2).search( this.value ).draw();
                    });
                    $('#dof').on( 'keyup', function () {
                    table.columns(7).search( this.value ).draw();
                    });
                    $('#dep-ad').on( 'keyup', function () {
                    table.columns(4).search( this.value ).draw();
                    });
                    $('#dest-ad').on( 'keyup', function () {
                    table.columns(6).search( this.value ).draw();
                    });
                });
        </script>
@endsection

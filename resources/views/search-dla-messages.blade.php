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
    <div class="container mt-5" style="margin-bottom: 5rem;">
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card border-0 shadow" style="border-radius: 13px;">
                    <div class="card-body">
                        <form method="post" action="{{route('searchPost')}}" style="font-family: 'Poppins', sans-serif;">
                            @csrf
                            <div class="row align-items-center p-3">
                                <div class="col">
                                    <h3 style="text-align: center">Search ATS Message</h3>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="msg-type" class="col-md-4 mb-0 col-form-label">{{ __('Type Message') }}</label>
                                            <div class="row">
                                                <div class="col-2">
                                                    <select name="msg-type" id="msg-type" class="p-2 rounded form-select">
                                                        <option value="DLA">DLA</option>
                                                        <option value="FPL">FPL</option>
                                                        <option value="CHG">CHG</option>
                                                        <option value="CNL">CNL</option>
                                                        <option value="DEP">DEP</option>
                                                        <option value="ARR">ARR</option>
                                                        <option value="">-- ALL MESSAGES --</option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <a href="search-fpl-messages" class="btn btn-dark text-white">
                                                        {{ __('Select') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
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
                                    {{-- <div class="row mb-3">
                                        <div class="col-2">
                                            <label for="dest" class="col-md-4 mb-0 col-form-label">{{ __('ARR') }}</label>
                                            <input name="arr" id="arr" class="p-2 rounded form-control">
                                        </div>
                                        <div class="col-2">
                                            <label for="etd" class="col-md-4 mb-0 col-form-label">{{ __('ATA') }}</label>
                                            <input name="ata" id="etd" class="p-2 rounded form-control">
                                        </div>
                                        <div class="col-2">
                                            <label for="to" class="col-md-4 mb-0 col-form-label">{{ __('TO') }}</label>
                                            <input name="to" id="to" class="p-2 rounded form-control">
                                        </div>
                                    </div> --}}
                                    <div class="row mb-3">
                                        <div class="col-2 d-inline-flex align-items-center me-4">
                                            <label for="dof" class="me-2 mb-0 col-form-label">{{ __('DOF') }}</label>
                                            <input name="dof" id="dof" type="date" class="p-2 rounded form-control">
                                        </div>
                                        <div class="col-3 d-inline-flex align-items-center me-4">
                                            <label for="group" class="me-2 mb-0 col-form-label">{{ __('Group') }}</label>
                                            <select name="group" id="group" class="p-2 rounded form-select text-uppercase">
                                                <option value="domestic">Domestic</option>
                                                <option value="overflying">Overflying</option>
                                                <option value="international">international</option>
                                                <option value="all-messages">-- All messages --</option>
                                            </select>
                                        </div>
                                        {{-- <div class="col-2 d-inline-flex align-items-center me-4">
                                            <label for="reg" class="me-2 mb-0 col-form-label">{{ __('REG') }}</label>
                                            <input name="reg" id="reg" class="p-2 rounded form-control">
                                        </div>
                                        <div class="col-3 d-inline-flex align-items-center">
                                            <label for="route" class="me-2 mb-0 col-form-label">{{ __('Route') }}</label>
                                            <input name="route" id="route" class="p-2 rounded form-control">
                                        </div> --}}
                                    </div>
                                    {{-- <div class="row mb-3">
                                        <div class="col-3 d-inline-flex align-items-center me-4">
                                            <label for="type" class="me-2 mb-0 col-form-label">{{ __('Type of Flight') }}</label>
                                            <select name="type" id="type" class="p-2 rounded form-select text-uppercase">
                                                <option value="S">Schedule</option>
                                                <option value="N">Non schedule</option>
                                                <option value="">-- All types --</option>
                                            </select>
                                        </div>
                                        <div class="col-3 d-inline-flex align-items-center me-4">
                                            <label for="group" class="me-2 mb-0 col-form-label">{{ __('Group') }}</label>
                                            <select name="group" id="group" class="p-2 rounded form-select text-uppercase">
                                                <option value="domestic">Domestic</option>
                                                <option value="overflying">Overflying</option>
                                                <option value="international">international</option>
                                                <option value="all-messages">-- All messages --</option>
                                            </select>
                                        </div>
                                    </div> --}}
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
                                            <button class="btn btn-warning text-white" type="reset">
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
    <div class="position-relative w-20">
        <div class="container mt-5" style="margin-bottom: 20vh;">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card border-0 shadow p-3" style="border-radius: 13px;">
                        <h3 class="fw-bold">DLA Messages</h3>
                        <div class="card-body table-responsive">
                            <table id="yajra-datatable" class="table yajra-datatable">
                                <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Originator</th>
                                    <th scope="col">Date/Time</th>
                                    <th scope="col">Aircraft ID</th>
                                    <th scope="col">DEP AD</th>
                                    <th scope="col">ATD</th>
                                    <th scope="col">DEST AD</th>
                                    <th scope="col">DOF</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{-- @php $no = 1 @endphp
                                @foreach ($data as $d)
                                <tr>
                                    <th>{{$no++}}</th>
                                    <th>{{$d->originator}}</th>
                                    <th>{{$d->created_at}}</th>
                                    <th>{{$d->aircraft_id}}</th>
                                    <th>{{$d->dep_id}}</th>
                                    <th>{{$d->time}}</th>
                                    <th>{{$d->dest_id}}</th>
                                    <th>{{$d->dof}}</th>
                                    <th>
                                        <a href="/dla-message-detail/{{$d->id}}" class="btn btn-dark text-white">
                                            {{ __('Detail') }}
                                        </a>
                                    </th>
                                </tr>
                                @endforeach --}}
                                {{-- INI NANTI MASUKIN KE PALING SAMPING SETELAH SEMUA DATA MUNCUL BUAT DETAIL PESAN DI KOLOM Acton--}}
                                    {{-- <th>
                                        <a href="/dla-message-detail" class="btn btn-dark text-white">
                                            {{ __('Detail') }}
                                        </a>
                                    </th> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="position-absolute bottom-0" style="left: 0; right: 0;">
        @include('layouts.footer')
    </div> --}}
</div>
    <script type="text/javascript">
        function eraseText() {
            document.getElementById("output").value = "";
        }

        $(function () {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: false,
                ajax: "{{route('dlaMessages')}}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'originator', name: 'aftn_header.originator'},//1
                    {data: 'time', name: 'messages.time'},
                    {data: 'aircraft_id', name: 'messages.aircraft_id'},
                    {data: 'dep_id', name: 'messages.dep_id'},
                    {data: null, "defaultContent": ""},
                    {data: 'dest_id', name: 'messages.dest_id'},
                    {data: 'dof', name: 'messages.dof'},
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

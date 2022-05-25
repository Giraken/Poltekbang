@extends('layouts.app')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">

<table id="table-kliping" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul Berita</th>
      <th>Kategori Berita</th>
      <th>Nama Media</th>
      <th>Tanggal Berita</th>
    </tr>
  </thead>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
      $('#table-kliping').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{url('kliping')}}',
        columns: [
          {
             render: function (data, type, row, meta) {
               return meta.row + meta.settings._iDisplayStart + 1;
             },
          },
          {
             data: 'jd_berita', name:'jd_berita'
          },
          {
             data: 'nm_kat_berita'
          },
          {
             data: 'id_kliping'
          },
          {
             data: 'tgl_berita'
          },
          {
             "render": function ( data, type, row ) {
               return '<button class="btn btn-primary btn-sm" onclick="terima('+row.id')">Lihat</button>'
             }
          }
        ],
      });
    });
  </script>
@endsection
@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-md-3 text-gray-800">Data Buku Besar</h1>
</div><hr>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <div class="card-body">
  <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead>
             <tr align="center">
                    <th width="20%">No Transaksi</th>
                    <th width="15%">Tanggal Transaksi</th>
                    <th width="35%">Catatan</th>
                    <th width="15%">Debit</th>
                    <th width="15%">Kredit</th>
             </tr>
         </thead>
         <tbody>
            @foreach ($bukubesar as $bb)
             <tr align="center">
                    <td>{{$bb->no_trans}}</td>
                    <td>{{$bb->tgl_trans}}</td>
                    <td>{{$bb->catatan}}</td>
                    <td>Rp. {{$bb->jml_db}}</td>
                    <td>Rp. {{$bb->jml_cr}}</td>
             </tr>
            @endforeach
         </tbody>
        </table>
   </div>
   </div>
</div>
@endsection
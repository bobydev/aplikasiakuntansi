@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-md-3 text-gray-800">Data Akun Rekening</h1>
</div><hr>
<div class="card-header py-3" align="right">
    <a href="{{route('akun.inputakun')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a>
</div><br>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
         <tr align="center">
             <th width="15%">Kode Akun</th>
             <th width="30%">Nama Akun</th>
             <th width="20%">Sub Klasifikasi</th>
             <th width="20%">Klasifikasi</th>
             <th width="15%">Aksi</th>
         </tr>
      </thead>
      <tbody>
        @foreach ($akun as $akn)
         <tr align="center">
             <td>{{$akn->kd_akun}}</td>
             <td>{{$akn->nm_akun}}</td>
             <td>{{$akn->subklasifikasi}}</td>
             <td>{{$akn->klasifikasi}}</td>
             <td align="center">
    <a href="/editakun/{{ $akn->id }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
    <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a>
    <a href="/akun/destroy/{{ $akn->id }}" onclick="return confirm('Kamu yakin ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
             <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
           </td>
          </tr>
          @endforeach
        </tbody>
       </table>
      </div>
     </div>
     </div>
@endsection
@extends('layouts.layout')
@section('content')
@foreach($akun as $akn)
<form enctype="multipart/form-data" action="{{route('akun.update', [$akn->id])}}" method="POST">
@csrf
  <input type="hidden" name="id" value="{{ $akn->id }}">
  <fieldset class="ml-md-3">
  <legend>Input Data Akun</legend>
  <div class="form-group row">
      <div class="col-md-5">
      <label for="kode">Kode Akun</label>
      <input id="kode" type="text" name="kode" class="form-control" value="{{ $akn->kd_akun }}">
    </div>
    <div class="col-md-5">
      <label for="nama">Nama Akun</label>
      <input id="nama" type="text" name="nama" class="form-control"value="{{ $akn->nm_akun }}">
    </div>
   </div>
   <div class="form-group row">
    <div class="col-md-5">
      <label for="klasifikasi">Klasifikasi Akun</label>
      <select id="klasifikasi" name="klasifikasi"class="form-control">
        <option value="{{ $akn->klasifikasi }}">{{ $akn->klasifikasi }}</option>
        <option value="">--Pilih Klasifikasi--</option>
        <option value="Harta">Harta</option>
        <option value="Kewajiban">Kewajiban</option>
        <option value="Modal">Modal</option>
        <option value="Pendapatan">Pendapatan</option>
        <option value="Biaya Atas Pendapatan">Biaya Atas Pendapatan</option>
        <option value="Pengeluaran Operasional">Pengeluaran Operasional</option>
        <option value="Pendapatan Lain">Pendapatan Lain</option>
      </select>
   </div>
   <div class="col-md-5">
      <label for="subklas">Sub Klasifikasi</label>
        <input id="subklas" type="text" name="subklas" class="form-control" value="{{ $akn->subklasifikasi }}">
   </div>
  </div>
  <div class="col-md-10">
      <input type="submit" class="btn btn-success btn-send" value="Update" >
      <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
  </div><hr>
  </fieldset>
  </form>
@endforeach
@endsection
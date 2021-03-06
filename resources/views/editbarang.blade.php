@extends('layouts.layout')
@section('content')
@foreach($barang as $brg)
<form enctype="multipart/form-data" action="{{route('barang.update', [$brg->id])}}" method="POST">
@csrf
  <input type="hidden" name="id" value="{{ $brg->id }}">
  <fieldset class="ml-md-3">
    <legend>Edit Data Produk</legend>
    <div class="form-group row">
      <div class="col-md-5">
        <label for="nama_barang">Nama Produk</label>
          <input id="nama_barang" type="text" name="nama_barang" class="form-control" value="{{ $brg->nama }}" required>
    </div>
    <div class="col-md-5">
      <label for="jenis_barang">Jenis Produk</label>
        <select id="jenis_barang" name="jenis_barang" class="form-control">
          <option value="{{ $brg->jenis }}">{{ $brg->jenis }}</option>
          <option value="">--Pilih Jenis Produk--</option>
          <option value="Home Appliance">Home Appliance</option>
          <option value="Komputer & Laptop">Komputer & Laptop</option>
          <option value="Pertukangan">Pertukangan</option>
      </select>
    </div>


  </div>
    <div class="form-group row">
       <div class="col-md-5">
        <label for="suplier">Supplier</label>
        <input id="suplier" type="text" name="suplier" class="form-control" value="{{ $brg->suplier }}"required="">
    </div>
      <div class="col-md-5">
         <label for="jumlah">Stok Tersedia</label>
          <input id="jumlah" type="text" name="jumlah" class="form-control" value="{{ $brg->jumlah }}" required="">
      </div>
      
    </div>
  <div class="form-group row">
    <div class="col-md-5">
         <label for="modal">Harga Beli</label>
         <input id="modal" type="text" name="modal" class="form-control" value="{{ $brg->modal }}" onkeyup="sum();">
      </div>
    <div class="col-md-5">
         <label for="harga">Harga Jual</label>
         <input id="harga" type="text" name="harga" class="form-control" value="{{ $brg->harga }}">
      </div>
  </div>
  <div class="col-md-10">
          <input type="submit" class="btn btn-success btn-send" value="Simpan" >
          <input type="button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
  </div>
 </fieldset>
</form>
<script>
  function sum() {
    var modal = document.getElementById('modal').value;
    var result = parseFloat(modal) * 2
      if (!isNaN(result)) {
        document.getElementById('harga').value = result;
      }
  }
</script>
@endforeach
@endsection


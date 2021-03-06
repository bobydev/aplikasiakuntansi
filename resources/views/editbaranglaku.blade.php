@extends('layouts.layout')
@section('content')
@foreach($baranglaku as $brgLaku)
<form enctype="multipart/form-data" action="{{route('baranglaku.update')}}" method="POST">
@csrf
    <input type="hidden" name="id" value="{{ $brgLaku->id }}">
  <fieldset class="ml-md-3">
    <legend>Edit Data Penjualan</legend>
    <div class="form-group row">
      <div class="col-md-5">
        <label for="tgl">Tanggal</label>
          <input id="tgl" type="date" name="tgl" class="form-control" value="{{ $brgLaku->tanggal }}" required>
    </div>
    <div class="col-md-5">
        <label for="nama_barang">Nama Produk</label>
          <input id="nama_barang" type="text" name="nama_barang" class="form-control" value="{{ $brgLaku->nama }}" required>
    </div>
  </div>
    <div class="form-group row">
       <div class="col-md-5">
        <label for="harga">Harga Jual</label>
        <input id="harga" type="text" name="harga" class="form-control" value="{{ $brgLaku->harga }}" onkeyup="sum();">
    </div>
      <div class="col-md-5">
         <label for="jumlah">Jumlah</label>
         <input id="jumlah" type="text" name="jumlah" class="form-control" value="{{ $brgLaku->jumlah }}"onkeyup="sum();">
      </div>
      
    </div>
  <div class="form-group row">
    <div class="col-md-5">
         <label for="total_harga">Total Harga</label>
         <input id="total_harga" type="text" name="total_harga" class="form-control" value="{{ $brgLaku->total_harga }}" required>
      </div>
      <div class="col-md-5">
         <label for="laba">Laba</label>
          <input id="laba" type="text" name="laba" class="form-control" value="{{ $brgLaku->laba }}">
      </div>
  </div>
  <div class="col-md-10">
          <input type="submit" class="btn btn-success btn-send" value="Simpan" >
          <input type="button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
  </div>
 </fieldset>
</form>
@endforeach
<script>
  function sum() {
    var harga = document.getElementById('harga').value;
    var jumlah = document.getElementById('jumlah').value;
    var result = parseFloat(harga) * parseFloat(jumlah);
      if (!isNaN(result)) {
        document.getElementById('total_harga').value = result;
      }

    var total_harga = document.getElementById('total_harga').value;
    var hasil =parseFloat(total_harga) / 2;
      if (!isNaN(hasil)) {
        document.getElementById('laba').value = hasil;
      }
  }
</script>
@endsection

   
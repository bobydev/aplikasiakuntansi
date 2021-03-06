@extends('layouts.layout')
@section('content')
<form enctype="multipart/form-data" action="{{route('baranglaku.store')}}" method="POST">
@csrf
  <fieldset class="ml-md-3">
    <legend>Entry Data Penjualan</legend>
    <div class="form-group row">
      <div class="col-md-5">
        <label for="tgl">Tanggal</label>
          <input id="tgl" type="date" name="tgl" class="form-control" required>
    </div>
    <div class="col-md-5">
        Nama Produk
        @for($i=1;$i<=1;$i++)
        <select id="id_barang{{$i}}" name="id_barang{{$i}}" class="form-control">
          <option value="0">--Pilih Produk--</option>
          @foreach ($barang as $brg)
          <option value="{{$brg->id}}">{{$brg->nama}}</option>
          @endforeach
        </select>
        @endfor
    </div>
  </div>
    <div class="form-group row">
       <div class="col-md-5">
        <label for="harga">Harga Jual</label>
        <input id="harga" type="text" name="harga" class="form-control" onkeyup="sum();">
    </div>
      <div class="col-md-5">
         <label for="jumlah">Jumlah</label>
         <input id="jumlah" type="text" name="jumlah" class="form-control" onkeyup="sum();">
      </div>
      
    </div>
  <div class="form-group row">
    <div class="col-md-5">
         <label for="total_harga">Total Harga</label>
         <input id="total_harga" type="text" name="total_harga" class="form-control" required>
      </div>
      <div class="col-md-5">
         <label for="laba">Laba</label>
          <input id="laba" type="text" name="laba" class="form-control">
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

   
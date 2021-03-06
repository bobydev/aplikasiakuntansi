<!DOCTYPE html>
<html>
<head>
     <title>Laporan Penjualan</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <style type="text/css">
         table tr td,
         table tr th{
            font-size: 10pt;
         }
     </style>
</head>
<body>
 <table class="table table-bordered" width="100%" align="center">
 	<tr align="center"><td><h2>LAPORAN PENJUALAN<br>CV MAKMUR GROUP</h2><hr></td></tr>
  </table>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
          <tr align="center">
            <th width="3%">No.</th>
            <th width="7%">Tanggal</th>
            <th width="15%">Nama Produk</th>
            <th width="10%">Harga Jual/Unit</th>
            <th width="5%">Jumlah</th>
            <th width="10%">Total Harga</th>
            <th width="10%">Laba</th>
          </tr>
        </thead>
        <tbody>
        @php $i=1 @endphp
        @foreach ($baranglaku as $brgLaku)
          <tr align="center">
            <td>{{$i++}}</td>
            <td>{{$brgLaku->tanggal}}</td>
            <td>{{$brgLaku->nama}}</td>
            <td>{{$brgLaku->harga}}</td>
            <td>{{$brgLaku->jumlah}}</td>
            <td>{{$brgLaku->total_harga}}</td>
            <td>{{$brgLaku->laba}}</td>
          </tr>
         @endforeach
       </tbody>
    </table>
    <div align="right">
         <h6>Tanda Tangan</h6><br><h6>{{ Auth::user()->name }}</h6>
    </div>
</body>
</html>
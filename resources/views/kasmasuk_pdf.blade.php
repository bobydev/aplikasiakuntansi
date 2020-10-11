<!DOCTYPE html>
<html>
<head>
     <title>Laporan Kas Masuk</title>
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
 	<tr align="center"><td><h2>Laporan Kas Masuk<br>PT. XYZ</h2><hr></td></tr>
  </table>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
          <tr align="center">
             <th width="5%">No</th>
             <th width="20%">No Transaksi</th>
             <th width="20%">Tanggal</th>
             <th width="40%">Memo</th>
             <th width="15%">Jumlah</th>
          </tr>
        </thead>
        <tbody>
        @php $i=1 @endphp
        @foreach ($kasmasuk as $km)
          <tr align="center">
             <td>{{$i++}}</td>
             <td>{{$km->no_km}}</td>
             <td>{{$km->tgl_km}}</td>
             <td>{{$km->memo_km}}</td>
             <td>{{$km->jml_km}}</td>
          </tr>
         @endforeach
       </tbody>
    </table>
    <div align="right">
         <h6>Tanda Tangan</h6><br><h6>{{ Auth::user()->name }}</h6>
    </div>
</body>
</html>
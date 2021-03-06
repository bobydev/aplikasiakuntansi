@extends('layouts.layout')
@section('content')
<form enctype="multipart/form-data" action="" method="GET">
@csrf
 <fieldset class="ml-md-3">
   <div class="form-group row">
     <div class="col-md-5">
      Nomor Transaksi<input type="text" class="form-control" value="{{$kaskeluar->no_kk}}" disabled>
     </div>
     <div class="col-md-5">
      Tanggal transaksi<input type="date" value="{{$kaskeluar->tgl_kk}}" class="form-control" disabled>
     </div>
   </div>
   <div class="form-group row">
      <div class="col-md-10">
      Memo<textarea type="text" class="form-control" disabled>{{$kaskeluar->memo_kk}}</textarea>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-md-10">Total Pengeluaran
          <input type="text" class="form-control" value="{{$kaskeluar->jml_kk}}" disabled>
   </div>
   </div>
   <div class="form-group row">
       <div class="col-md-10">Data Akun Yang Digunakan
          <table class="table table-bordered" width="100%" cellspacing="0">
             <thead>
                 <tr align="center">
                           <td width="20%">Id Akun</td>
                           <td width="20%">Kode Akun</td>
                           <td width="30%">Jumlah Debit</td>
                 </tr>
              <tbody>
    @foreach ($kaskeluardets as $detail)
                 <tr align="center">
                           <td>{{$detail->kd_akun}}</td>
                           <td>{{$detail->nm_akun}}</td>
                           <td>{{$detail->nilai_cr}}</td>
                 </tr>
    @endforeach
               </tbody>
               </thead>
           </table>
       </div>
    </div>
    <div class="form-group row">
    <div class="col-md-10">
          <input type="Button" class="btn btn-primary btnsend" value="Kembali" onclick="history.go(-1)">
    </div>
    </div><hr>
  </fieldset>
</form>
@endsection

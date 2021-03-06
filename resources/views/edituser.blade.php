@extends('layouts.layout')
@section('content')
@foreach($user as $usr)
<form enctype="multipart/form-data" action="{{route('user.update')}}" method="POST">
@csrf
    <input type="hidden" name="id" value="{{ $usr->id }}">
  <fieldset class="ml-md-3">
    <legend>Edit Data Pengguna</legend>
    <div class="form-group row">
      <div class="col-md-5">
        <label for="usname">Username</label>
          <input id="usname" type="text" name="usname" class="form-control" value="{{ $usr->username }}" required>
    </div>
    <div class="col-md-5">
        <label for="nama">Nama Lengkap</label>
          <input id="nama" type="text" name="nama" class="form-control" value="{{ $usr->name }}" required>
    </div>
  </div>
  <div class="form-group row">
     <div class="col-md-5">
        <label for="roles">Roles</label>
          <select id="roles" name="roles[]" class="form-control" value="{{ $usr->roles }}" required>
            <option value="">--Pilih Roles--</option>
            <option value="ADMIN">Admin</option>
            <option value="STAFF">Staff</option>
        </select>
      </div>
      <div class="col-md-5">
         <label for="email">Email</label>
         <input id="email" type="email" name="email" class="form-control" value="{{ $usr->email }}" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5">
         <label for="alamat">Alamat</label>
         <textarea id="alamat" name="alamat" class="form-control" value="{{ $usr->address }}"required>{{ $usr->address }}</textarea>
      </div>
      <div class="col-md-5">
         <label for="tlp">Nomor Telpon</label>
          <input id="tlp" type="text" name="tlp" class="form-control" value="{{ $usr->phone }}"required>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5">
         <label for="passw">Password</label>
          <input id="passw" type="password" name="passw" class="form-control">
   </div>
      <div class="col-md-5">
          <label for="kpassw">Konfirm Password</label>
           <input id="kpassw" type="password" name="kpassw" class="form-control">
   </div>
  </div>
    <div class="form-group row">
      <div class="col-md-5">
         <label for="status">Status</label>
         <select id="status" name="status" class="form-control" value="{{ $usr->status }}" required>
            <option value="">--Pilih Status--</option>
            <option value="ACTIVE">AKTIF</option>
            <option value="INACTIVE">NON AKTIF</option>
         </select>
    </div>
  </div>
  <div class="col-md-10">
          <input type="submit" class="btn btn-success btn-send" value="Simpan" >
          <input type="button" class="btn btn-primary btnsend" value="Kembali" onclick="history.go(-1)">
  </div><hr>
 </fieldset>
</form>
@endforeach
@endsection

   
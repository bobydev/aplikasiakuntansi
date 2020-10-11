@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 ml-md-3 text-gray-800 ">Data Pengguna</h1>
</div><hr>
<div class="card-header py-3" align="right">
	<a href="{{route('user.input')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
		<i class="fas fa-plus fa-sm text-white-50"></i> Tambah 
	</a>
</div><br>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<div class="card-body">
	<div class="table-responsive">
		 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			 <thead>
					<tr align="center">
						<th width="10%">Username</th>
						<th width="25%">Nama</th>
						<th width="20%">Email</th>
						<th width="15%">Roles</th>
						<th width="15%">Status</th>
						<th width="15%">Aksi</th>
					</tr>
			 </thead>
			 <tbody>
				 @foreach ($user as $usr)
					<tr align="center">
						<td>{{$usr->username}}</td>
						<td>{{$usr->name}}</td>
						<td>{{$usr->email}}</td>
						<td>{{$usr->roles}}</td>
						<td>{{$usr->status}}</td>
						<td align="center">
							<a href="/edituser/{{ $usr->id }}" class="dnone d-sm-inline-block btn btn-sm btn-success shadow-sm">
								 <i class="fas fa-edit fa-sm text-white-50"></i> Edit
							</a>
							 <a href="/user/destroy/{{ $usr->id }}" onclick="return confirm('Kamu yakin ingin menghapus data?')" class="dnone d-sm-inline-block btn btn-sm btn-danger shadow-sm">
								 <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus
							 </a>
						 </td>
					 </tr>
					 @endforeach
					</tbody>
				 </table>
				</div>
			</div>
		</div>
@endsection
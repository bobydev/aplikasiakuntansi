@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 ml-md-3 text-gray-800 ">Data Produk</h1>
</div><hr>
<div class="card-header py-3" align="right">
	<a href="{{route('barang.inputbarang')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
		<i class="fas fa-plus fa-sm text-white-50"></i> Entry Data Produk 
	</a>
</div><br>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<div class="card-body">
	<div class="table-responsive">
		 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			 <thead>
				<tr align="center">
					<th width="3%">No.</th>
					<th width="10%">Nama Produk</th>
					<th width="10%">Jenis Produk</th>
					<th width="10%">Supplier</th>
					<th width="10%">Harga Beli</th>
					<th width="10%">Harga Jual</th>		
					<th width="5%">Stok Tersedia</th>
					<th width="10%">Opsi</th>
				</tr>
			 </thead>
			 <tbody>
			 	 @php $i=1 @endphp
				 @foreach ($barang as $brg)
					<tr align="center">
						<td>{{$i++}}</td>
						<td>{{$brg->nama}}</td>
						<td>{{$brg->jenis}}</td>
						<td>{{$brg->suplier}}</td>
						<td>{{$brg->modal}}</td>
						<td>{{$brg->harga}}</td>
						<td>{{$brg->jumlah}}</td>
						<td align="center">
							<a href="/editbarang/{{ $brg->id }}" class="dnone d-sm-inline-block btn btn-sm btn-warning shadow-sm">
								 <i class="fas fa-edit fa-sm text-white-50"></i> Edit
							</a>
							 <a href="/barang/destroy/{{ $brg->id }}" onclick="return confirm('Kamu yakin ingin menghapus data?')" class="dnone d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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
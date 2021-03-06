@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-md-3 text-gray-800 ">Data Produk Terjual</h1>
</div><hr>
<div class="card-header py-3" align="right">
    <a href="{{route('baranglaku.inputbaranglaku')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Entry Penjualan 
    </a>
</div><br>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
    <div class="table-responsive">
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
                        <th width="10%">Opsi</th>
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
                        <td align="center">
                            <a href="/editbaranglaku/{{ $brgLaku->id }}" class="dnone d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                 <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                            </a>
                             <a href="/baranglaku/destroy/{{ $brgLaku->id }}" onclick="return confirm('Kamu yakin ingin menghapus data?')" class="dnone d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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

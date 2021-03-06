@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Halo, {{ Auth::user()->name }}! (^_^)</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <marquee>{{ __('Kamu berada pada halaman Home Admin. Gunakan dengan bijak.') }}</marquee>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

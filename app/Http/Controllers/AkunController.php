<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\Akun;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = \App\Models\Akun::All();
        return view('akun', ['akun' => $akun]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inputakun');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('akuns')->insert([
            'kd_akun' => $request->kode,
            'nm_akun' => $request->nama,
            'klasifikasi' => $request->klasifikasi,
            'subklasifikasi' => $request->subklas,
            ]);
        return redirect('akun');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data user berdasarkan id yang dipilih
        $akun = DB::table('akuns')->where('id', $id)->get();

        // passing data akun yang didapat ke view edit.blade.php
        return view('editakun', ['akun' => $akun]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('akuns')->where('id', $request->id)->update([
            'kd_akun' => $request->kode,
            'nm_akun' => $request->nama,
            'klasifikasi' => $request->klasifikasi,
            'subklasifikasi' => $request->subklas,
            ]);
        return redirect('akun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // hapus data pada table akun
        DB::table('akuns')->where('id', $id)->delete();

        // alihkan ke halaman index
        return redirect('akun');
    }
}

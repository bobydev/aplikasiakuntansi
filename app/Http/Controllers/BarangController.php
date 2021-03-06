<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use app\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = \App\Models\Barang::All();
        return view('barang', ['barang' => $barang]);
    }

    public function create()
    {
        //
        $jenis = \App\Models\Barang::All();
        return view('inputbarang', ['jenis' => $jenis]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $save_brg = new \App\Models\Barang; 

        $save_brg->nama=$request->get('nama_barang'); 
        $save_brg->jenis=$request->get('jenis_barang'); 
        $save_brg->suplier=$request->get('suplier'); 
        $save_brg->modal=$request->get('modal'); 
        $save_brg->harga=$request->get('harga');
        $save_brg->jumlah=$request->get('jumlah');
        $save_brg->save();

        // DB::table('barangs')->insert([
        //     'nama' => $request->nama_barang,
        //     'jenis' => $request->jenis_barang,
        //     'suplier' => $request->suplier,
        //     'modal' => $request->modal,
        //     'harga' => $request->harga,
        //     'jumlah' => $request->jumlah,
        // ]);

        return redirect('barang');

         
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
        $barang = DB::table('barangs')->where('id', $id)->get();

        // passing data user yang didapat ke view edit.blade.php
        return view('editbarang', ['barang' => $barang]);
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
        DB::table('barangs')->where('id', $request->id)->update([
            'nama' => $request->nama_barang,
            'jenis' => $request->jenis_barang,
            'suplier' => $request->suplier,
            'modal' => $request->modal,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
            ]);
        
        return redirect('barang');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus data pada table user
        DB::table('barangs')->where('id', $id)->delete();

        // alihkan ke halaman index
        return redirect('barang');
    }
}

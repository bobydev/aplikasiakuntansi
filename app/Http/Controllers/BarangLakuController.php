<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use app\Models\BarangLaku;

class BarangLakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baranglaku = \App\Models\BarangLaku::All();
        return view('baranglaku', ['baranglaku' => $baranglaku]);

    }

    public function create()
    {
        //

        $barang = \App\Models\Barang::All();
        return view('inputbaranglaku', ['barang' => $barang]);
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
       $save_bl = new \App\Models\BarangLaku; 

        $save_bl->tanggal=$request->get('tgl'); 
        $save_bl->nama=$request->get('id_barang');
        $save_bl->jumlah=$request->get('jumlah'); 
        $save_bl->harga=$request->get('harga'); 
        $save_bl->total_harga=$request->get('total_harga');
        $save_bl->laba=$request->get('laba');
        $save_bl->save();

        // for($i=1;$i<=1;$i++){
        //     $idbarang=$request->get('id_barang' . $id);
        // }

        return redirect('baranglaku');
         
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
        $baranglaku = DB::table('barang_lakus')->where('id', $id)->get();

        // passing data user yang didapat ke view edit.blade.php
        return view('editbaranglaku', ['baranglaku' => $baranglaku]);
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
            DB::table('barang_lakus')->where('id', $request->id)->update([
            'tanggal' => $request->tgl,
            'nama' => $request->nama_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
            'laba' => $request->laba,
        ]);
        return redirect('baranglaku');

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
        DB::table('barang_lakus')->where('id', $id)->delete();

        // alihkan ke halaman index
        return redirect('baranglaku');
    }
}

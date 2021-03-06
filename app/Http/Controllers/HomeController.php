<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use app\Models\BarangLaku;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // $baranglaku = \App\Models\BarangLaku::All();
        // return view('baranglaku', ['baranglaku' => $baranglaku]);

    }

    public function create()
    {
        //
        return view('input');
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
       $pass = $request->get('passw'); 
       $kpass = $request->get('kpassw'); 
       if ($pass == $kpass){ 
            DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'username' => $request->usname,
            'password' => \Hash::make($request->passw),
            'roles' => json_encode($request->roles),
            'address' => $request->alamat,
            'phone' => $request->tlp,
            'status' => $request->status
        ]);
        }
        return redirect('user');

         
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
        return redirect('home');

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
        DB::table('users')->where('id', $id)->delete();

        // alihkan ke halaman index
        return redirect('user');
    }
}

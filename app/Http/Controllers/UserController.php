<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use app\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\Models\User::All();
        return view('user', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $user = DB::table('users')->where('id', $id)->get();

        // passing data user yang didapat ke view edit.blade.php
        return view('edituser', ['user' => $user]);
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
        $pass = $request->get('passw'); 
       $kpass = $request->get('kpassw'); 
       if ($pass == $kpass){ 
            DB::table('users')->where('id', $request->id)->update([
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

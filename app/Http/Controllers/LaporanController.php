<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $periode=$request->get('periode');
        $jenis=$request->get('jenis');
        if($jenis=='bukubesar')
        {
           if($periode == 'All')
           {
              $bb = \App\BukuBesar::All();
              $pdf = PDF::loadview('bukubesar.bukubesar_pdf',['bukubesar'=>$bb])->setPaper('A4','landscape');
              return $pdf->stream();
           }elseif($periode == 'periode'){
              $tglawal=$request->get('tglawal');
              $tglakhir=$request->get('tglakhir');
              $bb=DB::table('buku_besar')
              ->whereBetween('tgltran', [$tglawal,$tglakhir])
              ->orderby('tgltran','ASC')
              ->get();
              $pdf = PDF::loadview('bukubesar.bukubesar_pdf',['bukubesar'=>$bb])->setPaper('A4','landscape');
              return $pdf->stream();
           }
           }
           elseif($jenis=='kaskeluar')
           {
            if($periode == 'All')
            {
               $data = \App\KasKeluar::All();
               $pdf = PDF::loadview('kaskeluar.kaskeluar_pdf',['kaskeluar'=>$data])->setPaper('A4','landscape');
               return $pdf->stream();
           }elseif($periode == 'periode'){
               $tglawal=$request->get('tglawal');
               $tglakhir=$request->get('tglakhir');
               $data=DB::table('kas_keluar')
               ->whereBetween('tglkk', [$tglawal,$tglakhir])
               ->orderby('tglkk','ASC')
               ->get();
               $pdf = PDF::loadview('kaskeluar.kaskeluar_pdf',['kaskeluar'=>$data])->setPaper('A4','landscape');
               return $pdf->stream();
           }
           }
           elseif($jenis=='kasmasuk')
           {
           if($periode == 'All')
           {
               $data = \App\KasMasuk::All();
               $pdf = PDF::loadview('kasmasuk.kasmasuk_pdf',['kasmasuk'=>$data])->setPaper('A4','landscape');
               return $pdf->stream();
            }elseif($periode == 'periode'){
               $tglawal=$request->get('tglawal');
               $tglakhir=$request->get('tglakhir');
               $data=DB::table('kas_masuk')
              ->whereBetween('tglkm', [$tglawal,$tglakhir])
              ->orderby('tglkm','ASC')
              ->get();
            $pdf = $pdf = PDF::loadview('kasmasuk.kasmasuk_pdf',['kasmasuk'=>$data])->setPaper('A4','landscape');
               return $pdf->stream();
            }
            }
            }
          }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

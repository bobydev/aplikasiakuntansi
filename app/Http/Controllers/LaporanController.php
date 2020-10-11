<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BukuBesar;
use App\Models\KasMasuk;
use App\Models\KasKeluar;
use PDF;

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
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $periode = $request->get('periode');
      $jenis = $request->get('jenis');
        if($jenis == 'bukubesar'){
          $bb = \App\Models\BukuBesar::All();
          $pdf = PDF::loadview('bukubesar_pdf',['bukubesar' => $bb])->setPaper('A4','landscape');

          return $pdf->stream('laporan_buku_besar.pdf');
        }elseif($periode == 'periode'){
          $tglawal = $request->get('tglawal');
          $tglakhir = $request->get('tglakhir');
          $bb = DB::table('buku_besars')
                ->whereBetween('tgl_trans', [$tglawal,$tglakhir])
                ->orderby('tgl_trans','ASC')
                ->get();
          $pdf = PDF::loadview('bukubesar_pdf',['bukubesar' => $bb])->setPaper('A4','landscape');

          return $pdf->stream('laporan_buku_besar.pdf');
        }elseif($jenis == 'kaskeluar'){
          if($periode == 'All'){
            $data = \App\Models\KasKeluar::All();
            $pdf = PDF::loadview('kaskeluar_pdf',['kaskeluar'=>$data])->setPaper('A4','landscape');
            
            return $pdf->stream('laporan_kas_keluar.pdf');
          }elseif($periode == 'periode'){
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $data=DB::table('kas_keluars')
               ->whereBetween('tgl_kk', [$tglawal,$tglakhir])
               ->orderby('tgl_kk','ASC')
               ->get();
            $pdf = PDF::loadview('kaskeluar_pdf',['kaskeluar'=>$data])->setPaper('A4','landscape');
            
            return $pdf->stream('laporan_kas_keluar.pdf');
          }

        }elseif($jenis == 'kasmasuk'){
          if($periode == 'All'){
            $data = \App\Models\KasMasuk::All();
            $pdf = PDF::loadview('kasmasuk_pdf',['kasmasuk'=>$data])->setPaper('A4','landscape');
            
            return $pdf->stream('laporan_kas_masuk.pdf');
          }elseif($periode == 'periode'){
            $tglawal=$request->get('tglawal');
            $tglakhir=$request->get('tglakhir');
            $data=DB::table('kas_masuks')
              ->whereBetween('tgl_km', [$tglawal,$tglakhir])
              ->orderby('tgl_km','ASC')
              ->get();
            $pdf = $pdf = PDF::loadview('kasmasuk_pdf',['kasmasuk'=>$data])->setPaper('A4','landscape');
               return $pdf->stream('laporan_kas_masuk.pdf');
          }

        }

    }      
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

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

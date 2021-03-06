<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Akun; 
use App\Models\BukuBesar; 


class KasKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kk = \App\Models\KasKeluar::All(); 
        return view( 'kaskeluar' , ['kaskeluar' => $kk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         
        $akun = \App\Models\Akun::All();
        $akun2 = Akun::paginate(3);
        $AWAL = 'KK';
     
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\KasKeluar::max('id');
        $nomorawal = $noUrutAkhir+1;
        $no = 1;
     
        if($noUrutAkhir){
            //echo "No urut surat di database : " . $noUrutAkhir;
            //echo "<br>";
            $nomor = sprintf($AWAL . '-' ."%05s", abs( $noUrutAkhir + 1 ));
        }
        
        else{
            //echo "No urut surat di database : 0" ;
            //echo "<br>";
            $nomor = sprintf($AWAL . '-' ."%05s", $no);
        }
     
        return view('inputkk', ['nomor'=>$nomor, 'nomorawal'=>$nomorawal, 'akun'=>$akun, 'akn'=>$akun2]);
     

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
        // DB::table('akuns')->insert([
        //     'kd_akun' => $request->kode,
        //     'nm_akun' => $request->nama,
        //     'klasifikasi' => $request->klasifikasi,
        //     'subklasifikasi' => $request->subklas,
        //     ]);
        // return redirect('akun');

        $save_kk = new \App\Models\KasKeluar; 

        $save_kk->no_kk=$request->get('notrans'); 
        $save_kk->tgl_kk=$request->get('tgltr'); 
        $save_kk->memo_kk=$request->get('memo'); 
        $save_kk->jml_kk=$request->get('total'); 
        $save_kk->save(); 
       
        //Menyimpan Data Ke Tabel Buku_Besar 
        $savebb= new \App\Models\BukuBesar; 
        $savebb->id_trans=$request->get('idkk'); 
        $savebb->no_trans=$request->get('notrans'); 
        $savebb->tgl_trans=$request->get('tgltr');
        $savebb->catatan=$request->get('memo'); 
        $savebb->jml_db=$request->get('total'); 
        $savebb->jml_cr=0; 
        $savebb->save(); 

        //Menyimpan Data Ke Tabel Kas_Keluar_det 
        for($i=1;$i<=3;$i++) { 
            $idkk=$request->get('idkk'); 
            $idakn=$request->get('idakun'.$i);
            $nil=$request->get('txt'.$i); 
            if($idakn==0 or $nil==0 or empty($idakn)) { 
                return redirect()->route( 'kaskeluar' ); 
            } else{ 
                $savedet = new \App\Models\KasKeluarDet; 
                $savedet->id_kk=$idkk; 
                $savedet->id_akun=$idakn; 
                $savedet->nilai_cr=$nil; 
                $savedet->save(); 
            } 
        } 
        return redirect('kaskeluar');


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
        $kk = \App\Models\KasKeluar::findOrFail($id); 
        //Query Mengambil Data Detail 
        $detail = DB::select('SELECT akuns.kd_akun, akuns.nm_akun,kas_keluar_dets.nilai_cr FROM kas_keluar_dets, akuns WHERE akuns.id=kas_keluar_dets.id_akun AND id_kk = :id', ['id' => $kk->id]); 
        
        return view( 'detailkk' , ['kaskeluar' => $kk, 'kaskeluardets' => $detail]);
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
        
        $kk = \App\Models\KasKeluar::findOrFail($id); 
        $kk->delete(); 
        DB::table('kas_keluar_dets')->where('id_kk','=',$kk->id)->delete(); 
        DB::table('buku_besars')->where('no_trans','=', $kk->no_kk)->delete(); 
        
        return redirect('kaskeluar');
    }
}
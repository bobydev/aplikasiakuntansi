<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Akun; 
use App\Models\BukuBesar; 

class KasMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $km = \App\Models\KasMasuk::All(); 
        return view( 'kasmasuk' , ['kasmasuk' => $km]);
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
        $AWAL = 'KM';
     
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\KasMasuk::max('id');
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
     
        return view('inputkm', ['nomor'=>$nomor, 'nomorawal'=>$nomorawal, 'akun'=>$akun, 'akn'=>$akun2]);
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
        $save_km = new \App\Models\KasMasuk; 

        $save_km->no_km=$request->get('notrans'); 
        $save_km->tgl_km=$request->get('tgltr'); 
        $save_km->memo_km=$request->get('memo'); 
        $save_km->jml_km=$request->get('total'); 
        $save_km->save(); 
       
        //Menyimpan Data Ke Tabel Buku_Besar 
        $savebb= new \App\Models\BukuBesar; 
        $savebb->id_trans=$request->get('idkm'); 
        $savebb->no_trans=$request->get('notrans'); 
        $savebb->tgl_trans=$request->get('tgltr');
        $savebb->catatan=$request->get('memo'); 
        $savebb->jml_db=0; 
        $savebb->jml_cr=$request->get('total'); 
        $savebb->save(); 

        //Menyimpan Data Ke Tabel Kas_Masuk_det 
        for($i=1;$i<=3;$i++) { 
            $idkm=$request->get('idkm'); 
            $idakn=$request->get('idakun'.$i);
            $nil=$request->get('txt'.$i); 
            if($idakn==0 or $nil==0 or empty($idakn)) { 
                return redirect()->route( 'kasmasuk' ); 
            } else{ 
                $savedet = new \App\Models\KasMasukDet; 
                $savedet->id_km=$idkm; 
                $savedet->id_akun=$idakn; 
                $savedet->nilai_cr=$nil; 
                $savedet->save(); 
            } 
        } 
        return redirect('kasmasuk');

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
        $km = \App\Models\KasMasuk::findOrFail($id); 
        //Query Mengambil Data Detail 
        $detail = DB::select('SELECT akuns.kd_akun, akuns.nm_akun,kas_masuk_dets.nilai_cr FROM kas_masuk_dets, akuns WHERE akuns.id=kas_masuk_dets.id_akun AND id_km = :id', ['id' => $km->id]); 
        
        return view( 'detailkm' , ['kasmasuk' => $km, 'kasmasukdets' => $detail]);
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

        $km = \App\Models\KasMasuk::findOrFail($id); 
        $km->delete(); 
        DB::table('kas_masuk_dets')->where('id_km','=',$km->id)->delete(); 
        DB::table('buku_besars')->where('no_trans','=', $km->no_km)->delete(); 
        return redirect('kasmasuk');
    }
}

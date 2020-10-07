<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasMasukDet extends Model
{
   protected $table = "kas_masuk_dets";
   protected $fillable = [
    	'id_km', 'id_akun', 'nilai_cr'
    ];
}

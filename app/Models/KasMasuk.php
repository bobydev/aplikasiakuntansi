<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasMasuk extends Model
{
   protected $table = "kas_masuks";
    protected $fillable = [
    	'id', 'no_km', 'tgl_km', 'memo_km', 'jml_km'
    ];
}

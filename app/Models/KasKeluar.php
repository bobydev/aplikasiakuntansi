<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasKeluar extends Model
{
    protected $table = "kas_keluars";
    protected $fillable = [
    	'id', 'no_kk', 'tgl_kk', 'memo_kk', 'jml_kk'
    ];
}

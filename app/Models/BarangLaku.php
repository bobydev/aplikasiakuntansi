<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangLaku extends Model
{
    protected $table = "barang_lakus";
    protected $fillable = [
    	'id', 'tanggal', 'nama', 'jumlah', 'harga', 'total_harga', 'laba'
    ];
}

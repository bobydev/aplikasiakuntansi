<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barangs";
    protected $fillable = [
    	'id', 'nama', 'jenis', 'suplier', 'modal', 'harga', 'jumlah', 'sisa'
    ];
}

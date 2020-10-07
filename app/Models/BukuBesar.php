<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuBesar extends Model
{
    protected $table = "buku_besars";
    protected $fillable = [
    	'id', 'id_trans', 'no_trans', 'catatan', 'jml_db', 'jml_cr'
    ];
}

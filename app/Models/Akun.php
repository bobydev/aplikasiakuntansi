<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = "akuns";
    protected $fillable = [
    	'id', 'kd_akun', 'nm_akun', 'klasifikasi', 'subklasifikasi', 'jml_cr'
    ];
}

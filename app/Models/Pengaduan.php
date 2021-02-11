<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\Pelanggan;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = "tr_pengaduan";
    protected $fillable = [
        'id',
        'nama',
        'isilaporan',
        'email',
        'telp',
        'jenis_laporan'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pelanggan;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Tymon\JWTAuth\Contracts\JWTSubject;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = "tr_pengiriman";
    protected $fillable = [
        'id',
        'noresi',
        'no',
        'tgl_kirim',
        'jam_kirim'
    ];

    public function pelanggan() {
        return $this->hasMany(Pelanggan::class, 'kdplg');
    }

}

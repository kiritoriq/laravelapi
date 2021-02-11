<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pengiriman;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "master_pelanggan";
    protected $fillable = [
        'id',
        'kdplg',
        'nama'
    ];

    public function pengiriman() {
        return $this->hasMany(Pengiriman::class, 'kdplg');
    }
}

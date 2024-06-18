<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $fillable = ['ObatapotekID', 'Jumlah_obat', 'Total_harga'];

    public function obatapotek()
    {
        return $this->belongsTo(Obatapotek::class, 'ObatapotekID');
    }
}

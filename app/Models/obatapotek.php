<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatapotek extends Model
{
    use HasFactory;
    protected $table = 'obatapoteks';
    protected $fillable = ['ApotekID', 'Namaobat', 'Hargaobat', 'Stokobat'];

    public function apotek()
    {
        return $this->belongsTo(Apotek::class, 'ApotekID');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

}

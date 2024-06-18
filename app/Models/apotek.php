<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\QueryException;
class apotek extends Model
{
    use HasFactory;
    protected $table = 'apotek';
    protected $fillable = ['Nama_Apotek','Lokasi','Jam_Buka'];

    public function obatapotek()
    {
        return $this->hasMany(Obatapotek::class);
    }
}

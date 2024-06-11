<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $fillable = ['Nama_Obat','Penggunaan_Obat','Nama_Penyakit','Keterangan_Penyakit'];
}

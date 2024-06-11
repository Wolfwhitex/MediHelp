<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultan extends Model
{
    use HasFactory;
    protected $table = 'konsultan';
    protected $fillable = ['KonsultanID','Nama','Spesialisasi','NoTelepon','Email','Alamat'];

    public function konsultasi()
    {
        return $this->hasMany(Konsultasi::class);
    }
}

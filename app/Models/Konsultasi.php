<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;
    protected $table = 'konsultasi';
    protected $fillable = ['KonsultanID', 'Nama', 'jadwal', 'Konsultasi'];

    public function konsultan()
    {
        return $this->belongsTo(Konsultan::class);
    }

}

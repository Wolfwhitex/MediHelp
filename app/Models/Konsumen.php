<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Konsumen extends Authenticatable
{
    use HasFactory;
    protected $table = 'konsumen';

    protected $fillable = ['username', 'name', 'umur', 'alamat', 'notelpon', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

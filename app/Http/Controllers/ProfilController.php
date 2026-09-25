<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil_sekolah extends Model
{
    protected $table = 'profil_sekolah';

    protected $fillable = [
        'nama_sekolah',
        'alamat',
        'email',
        'telepon',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profil_sekolah extends Model
{
    //
     protected $table = 'siswa';

    protected $fillable = [
        'nama_sekolah',
        'alamat',
        'telepon',
        'email',
        'website',
        'deskripsi',
        'sejarah',
        'visi',
        'misi',
        'logo',
    ];
}

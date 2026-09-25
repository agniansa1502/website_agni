<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    //
     protected $table = 'siswa';

    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
    ];
}

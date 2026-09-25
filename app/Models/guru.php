<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    //
     protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'nip',
        'jenis_kelamin',
        'jabatan',
        'mata_pelajaran',
        'foto'
    ];
}

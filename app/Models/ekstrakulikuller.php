<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ekstrakulikuller extends Model
{
    //
     protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'deskripsi',
        'pembina',
        'jadwal',
        'foto',
    ];
}

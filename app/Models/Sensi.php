<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensi extends Model
{
    protected $fillable = [
         'tanggal_absen',
         'keterangan'
    ];
}

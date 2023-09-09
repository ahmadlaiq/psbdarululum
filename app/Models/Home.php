<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pendaftaran', 'tempat_pendaftaran', 'tanggal_daftar_ulang',
    ];
}

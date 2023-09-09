<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    protected $fillable = [
        'akta_kelahiran', 'kartu_keluarga', 'ijazah', 'shun', 'nisn', 'ktp', 'bukti_pembayaran', 'user_id', 'formulir_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function formulir()
    {
        return $this->belongsTo(Formulir::class);
    }
}

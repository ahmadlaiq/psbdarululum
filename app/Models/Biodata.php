<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    // protected $guarded = [
    //     'id',
    //     'timestamps'
    // ];

    protected $fillable = [
        'pendidikan_nonformal',
        'nama_lembaga',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

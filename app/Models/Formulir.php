<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    protected $cascadeDeletes = ['user'];
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama',
        'nomor_kk',
        'nomor_hp',
        'nisn',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'anak_ke',
        'tinggal_bersama',
        'pendidikan_terakhir',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'alamat',
        'kode_pos',
        'mondok',
        'jenis_pendaftaran',
        'lembaga',
        'jurusan',
        'ukuran_seragam',
        'user_id',
        'nomor_un',
        'pendidikan_nonformal',
        'nama_lembaga',
        'alamat_lembaga',
        'tahun_lulus',
        'tanggal_masuk_pesantren',
        'pendidikan_tambahan',
        'pendidikan_formal',
        'kelas_pendidikan_formal',
        'diniyyah',
        'kelas_diniyyah',
        'nama_kepala_keluarga',
        'status_kepala_keluarga',
        'nama_ayah',
        'status_ayah',
        'nik_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nomor_hp_ayah',
        'nama_ibu',
        'status_ibu',
        'nik_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'nomor_hp_ibu',
        'wali_yang_bertanggungjawab',
        'nama_wali',
        'nomor_hp_wali',
        'status_pendaftaran'
    ];

    /**
     * Get the user that owns the Formulir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function berkas()
    {
        return $this->hasOne(Berkas::class);
    }
}

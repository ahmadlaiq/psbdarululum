<?php

namespace Database\Seeders;

use App\Models\Berkas;
use App\Models\Biodata;
use App\Models\Formulir;
use Illuminate\Database\Seeder;

class FormulirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formulir::create([
            'nama'                  => 'Lisa',
            'nik'                   => '3022803990003214',
            'nomor_kk'              => '3022803990003212',
            'nomor_hp'              => '085745974148',
            'nisn'                  => '1234567890',
            'jenis_kelamin'         => 'Perempuan',
            'tempat_lahir'          => 'Lamongan',
            'tanggal_lahir'         => '1999-03-28',
            'anak_ke'               => 1,
            'tinggal_bersama'       => 'Orang Tua',
            'pendidikan_terakhir'   => 'SMP/MTs/Sederajat',
            'provinsi'              => 'Sumatera Utara',
            'kabupaten'             => 'Kabupaten Tapanuli Tengah',
            'kecamatan'             => 'Sukabangun',
            'alamat'                => 'Jl Nanananana',
            'kode_pos'              => 23412,
            'mondok'                => 'ya',
            'jenis_pendaftaran'     => 'baru',
            'lembaga'               => 'SMKS Walisongo Pacet',
            'jurusan'               => 'Kehutanan',
            'ukuran_seragam'        => 'S',
            'user_id'               => 2,
            'nomor_un'              => '823867263',
            'pendidikan_nonformal'  => 'TPQ',
            'status_pendaftaran'    => 'proses',
        ]);

        Berkas::create([
            'user_id' => 2,
            'formulir_id' => 1
        ]);

        
    }
}

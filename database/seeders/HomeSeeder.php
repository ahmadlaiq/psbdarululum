<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'tanggal_pendaftaran' => '15 Februari - 29 Juni 2022',
            'tempat_pendaftaran' => 'Kantor Yayasan Jl. Moch Sholeh No. 270 Pacet Mojokerto 61374',
            'tanggal_daftar_ulang' => '30 Juni - 10 Juli 2022',
        ]);
    }
}

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
            'tempat_pendaftaran' => 'Kantor Sekolah
            7H9C+MVJ Desa Kenongo, Sedan, Rembang
            59264',
            'tanggal_daftar_ulang' => '30 Juni - 10 Juli 2022',
            'link_wa' => 'https://chat.whatsapp.com/HUbkksjs4w7FWFuHhYn7p2',
        ]);
    }
}

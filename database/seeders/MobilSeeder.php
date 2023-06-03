<?php

namespace Database\Seeders;

use App\Models\MobilModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        MobilModel::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama_mobil' => 'daihatsu ayla',
            'noplat_mobil' => 'L 1143 WA',
            'warna mobil' => 'hitam',
            'id_tipemobil' => 1,
            'kapasitas' => 4,
            'bagasi' => 2,
            'transmisi' => 'manual',
            'tahun_mobil' => 2015,
            'status' => 1,
            'harga_sewa' => 300000]
        ];
    }
}

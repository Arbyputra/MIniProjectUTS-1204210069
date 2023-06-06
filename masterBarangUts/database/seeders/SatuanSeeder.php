<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'A01',
                'nama_satuan' => 'Buah',
            ],
            [
                'kode_satuan' => 'B01',
                'nama_satuan' => 'Lusin',
            ],
            [
                'kode_satuan' => 'C01',
                'nama_satuan' => 'Rim',
            ]
        ]);

    }
}

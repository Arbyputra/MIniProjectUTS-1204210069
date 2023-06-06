<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => '0001',
                'nama_barang' => 'buku',
                'harga_barang' => '30000',
                'deskripsi_barang' => 'buku komik',
                'satuan_id' => 1,
            ],
            [
                'kode_barang' => '0002',
                'nama_barang' => 'pensil',
                'harga_barang' => '25000',
                'deskripsi_barang' => 'pensil 2b',
                'satuan_id' => 2,
            ],
            [
                'kode_barang' => '0003',
                'nama_barang' => 'HVS',
                'harga_barang' => '50000',
                'deskripsi_barang' => 'kertas HVS',
                'satuan_id' => 3,
            ],
        ]);

    }
}

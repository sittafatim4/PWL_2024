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
        $data = [
            ['barang_id' => 1, 'nama_barang' => 'TV LED', 'kategori_id' => 1],
            ['barang_id' => 2, 'nama_barang' => 'Kemeja Pria', 'kategori_id' => 2],
            ['barang_id' => 3, 'nama_barang' => 'Nasi Goreng', 'kategori_id' => 3],
            ['barang_id' => 4, 'nama_barang' => 'Jus Jeruk', 'kategori_id' => 4],
            ['barang_id' => 5, 'nama_barang' => 'Setrika', 'kategori_id' => 5],
            ['barang_id' => 6, 'nama_barang' => 'Kulkas', 'kategori_id' => 1],
            ['barang_id' => 7, 'nama_barang' => 'Celana Jeans', 'kategori_id' => 2],
            ['barang_id' => 8, 'nama_barang' => 'Roti Bakar', 'kategori_id' => 3],
            ['barang_id' => 9, 'nama_barang' => 'Teh Botol', 'kategori_id' => 4],
            ['barang_id' => 10, 'nama_barang' => 'Kompor Gas', 'kategori_id' => 5],
        ];

        DB::table('m_barang')->insert($data);
    }
}

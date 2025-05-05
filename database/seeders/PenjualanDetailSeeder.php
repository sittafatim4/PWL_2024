<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1], ['id' => 2], ['id' => 3],
            ['id' => 4], ['id' => 5], ['id' => 6],
            ['id' => 7], ['id' => 8], ['id' => 9],
            ['id' => 10], ['id' => 11], ['id' => 12],
            ['id' => 13], ['id' => 14], ['id' => 15],
            ['id' => 16], ['id' => 17], ['id' => 18],
            ['id' => 19], ['id' => 20], ['id' => 21],
            ['id' => 22], ['id' => 23], ['id' => 24],
            ['id' => 25], ['id' => 26], ['id' => 27],
            ['id' => 28], ['id' => 29], ['id' => 30],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}

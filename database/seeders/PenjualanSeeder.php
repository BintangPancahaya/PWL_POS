<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [
        ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Budi', 'penjualan_kode' => 'PJL01', 'penjualan_tanggal' => now()],
        ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Siti', 'penjualan_kode' => 'PJL02', 'penjualan_tanggal' => now()],
        ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Andi', 'penjualan_kode' => 'PJL03', 'penjualan_tanggal' => now()],
        // Kamu bisa menambahkan data sampai penjualan_id 10 jika diminta di jobsheet
    ];
    DB::table('t_penjualan')->insert($data);
}
}

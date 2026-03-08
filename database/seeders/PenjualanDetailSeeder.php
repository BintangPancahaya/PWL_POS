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
        // Detail untuk Transaksi 1
        ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 1, 'harga' => 10000, 'jumlah' => 2],
        ['detail_id' => 2, 'penjualan_id' => 1, 'barang_id' => 3, 'harga' => 3500, 'jumlah' => 1],
        ['detail_id' => 3, 'penjualan_id' => 1, 'barang_id' => 5, 'harga' => 7000, 'jumlah' => 1],
        
        // Detail untuk Transaksi 2
        ['detail_id' => 4, 'penjualan_id' => 2, 'barang_id' => 2, 'harga' => 5000, 'jumlah' => 5],
        ['detail_id' => 5, 'penjualan_id' => 2, 'barang_id' => 4, 'harga' => 4000, 'jumlah' => 2],
        ['detail_id' => 6, 'penjualan_id' => 2, 'barang_id' => 8, 'harga' => 120000, 'jumlah' => 1],
        
        // Detail untuk Transaksi 3
        ['detail_id' => 7, 'penjualan_id' => 3, 'barang_id' => 9, 'harga' => 135000, 'jumlah' => 1],
        ['detail_id' => 8, 'penjualan_id' => 3, 'barang_id' => 10, 'harga' => 75000, 'jumlah' => 2],
        ['detail_id' => 9, 'penjualan_id' => 3, 'barang_id' => 1, 'harga' => 10000, 'jumlah' => 3],
    ];
    DB::table('t_penjualan_detail')->insert($data);
}
}

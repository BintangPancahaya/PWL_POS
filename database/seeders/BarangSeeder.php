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
        ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG1', 'barang_nama' => 'Chitato', 'harga_beli' => 8000, 'harga_jual' => 10000],
        ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG2', 'barang_nama' => 'Taro', 'harga_beli' => 4000, 'harga_jual' => 5000],
        ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG3', 'barang_nama' => 'Floridina', 'harga_beli' => 2500, 'harga_jual' => 3500],
        ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG4', 'barang_nama' => 'Teh Pucuk', 'harga_beli' => 3000, 'harga_jual' => 4000],
        ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG5', 'barang_nama' => 'Paracetamol', 'harga_beli' => 5000, 'harga_jual' => 7000],
        ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG6', 'barang_nama' => 'Panadol', 'harga_beli' => 8000, 'harga_jual' => 10000],
        ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG7', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 35000, 'harga_jual' => 50000],
        ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG8', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 80000, 'harga_jual' => 120000],
        ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG9', 'barang_nama' => 'Mouse Logitech', 'harga_beli' => 100000, 'harga_jual' => 135000],
        ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Flashdisk 32GB', 'harga_beli' => 50000, 'harga_jual' => 75000],
    ];
    DB::table('m_barang')->insert($data);
}
}

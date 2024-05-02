<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
    ['nama_produk' => 'RTX 4060', 'jumlah' => '11', 'tanggal_produksi' => '2024-01-23', 'id_merek' => '1'],
    ['nama_produk' => 'GTX 1660ti', 'jumlah' => '10', 'tanggal_produksi' => '2024-01-22', 'id_merek' => '1'],
    ['nama_produk' => 'GT 1030', 'jumlah' => '8', 'tanggal_produksi' => '2024-01-21', 'id_merek' => '1'],
    ['nama_produk' => 'AMD RX 5700XT', 'jumlah' => '10', 'tanggal_produksi' => '2024-01-24', 'id_merek' => '2'],
    ['nama_produk' => 'AMD Ryzen 5500u', 'jumlah' => '7', 'tanggal_produksi' => '2024-01-25', 'id_merek' => '2'],
    ['nama_produk' => 'Intel Xeon', 'jumlah' => '12', 'tanggal_produksi' => '2024-01-26', 'id_merek' => '3'],
    ['nama_produk' => 'AMD Radeon RX 550', 'jumlah' => '8', 'tanggal_produksi' => '2024-01-27', 'id_merek' => '2'],
    ['nama_produk' => 'I9 13900KF', 'jumlah' => '5', 'tanggal_produksi' => '2024-01-28', 'id_merek' => '3'],
    ['nama_produk' => 'I7 3770F', 'jumlah' => '15', 'tanggal_produksi' => '2024-01-29', 'id_merek' => '3'],
];
DB::table('produks')->insert($produks);

    }
}

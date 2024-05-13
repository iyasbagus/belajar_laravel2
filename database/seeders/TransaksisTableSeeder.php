<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
    ['id_barang' => '1', 'id_pembeli' => '1', 'jumlah' => 10, 'tanggal' => '2024-01-22'],
    ['id_barang' => '2', 'id_pembeli' => '2', 'jumlah' => 15, 'tanggal' => '2024-01-23'],
    ['id_barang' => '2', 'id_pembeli' => '1', 'jumlah' => 15, 'tanggal' => '2024-01-24'],
    ['id_barang' => '3', 'id_pembeli' => '2', 'jumlah' => 20, 'tanggal' => '2024-01-25'],
    ['id_barang' => '1', 'id_pembeli' => '3', 'jumlah' => 10, 'tanggal' => '2024-01-26'],
    ['id_barang' => '3', 'id_pembeli' => '3', 'jumlah' => 13, 'tanggal' => '2024-01-21'],
];
DB::table('transaksis')->insert($transaksis);

    }
}

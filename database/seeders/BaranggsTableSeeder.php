<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaranggsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baranggs = [
    ['nama_barang' => 'Musang King', 'harga' => 10000, 'stok' => 10],
    ['nama_barang' => 'Burung Garut', 'harga' => 20000, 'stok' => 15],
    ['nama_barang' => 'Monyet Jawa', 'harga' => 15000, 'stok' => 9],
];
DB::table('baranggs')->insert($baranggs);
    }
}

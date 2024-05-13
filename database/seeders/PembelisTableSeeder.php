<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
    ['nama_pembeli' => 'Agus Jawa', 'jenis_kelamin' => 'Pria'],
    ['nama_barang' => 'Asep Mancing', 'jenis_kelamin' => 'Pria'],
    ['nama_barang' => 'Wahyu Tambal Ban', 'jenis_kelamin' => 'Pria',],
];
DB::table('pembelis')->insert($pembelis);

    }
}

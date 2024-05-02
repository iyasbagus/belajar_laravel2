<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
    ['nomor_telepon' => '082200010001', 'pengguna_id' => 1],
    ['nomor_telepon' => '082200010002', 'pengguna_id' => 2],
    ['nomor_telepon' => '082200010003', 'pengguna_id' => 3],
];
DB::table('telepons')->insert($telepons);

    }
}

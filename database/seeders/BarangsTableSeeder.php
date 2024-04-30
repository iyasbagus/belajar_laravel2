<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $barangs = [
    ['nama' => 'Tsunami SNM 100', 'jumlah' => 30],
    ['nama' => 'CrankSet HollowTech', 'jumlah' => 50],
    ['nama' => 'Wheelset Araya 700c', 'jumlah' => 43],
];
    DB::table('barangs')->insert($barangs);
    }
}

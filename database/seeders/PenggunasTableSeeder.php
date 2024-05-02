<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
$penggunas = [
    ['nama' => 'Iyas Bagus'],
    ['nama' => 'Bagus Iyas'],
    ['nama' => 'Iyas Dan Bagus'],
];
DB::table('penggunas')->insert($penggunas);

    }
}

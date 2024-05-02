<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $mereks = [
    ['nama_merek' => 'Nvdia'],
    ['nama_merek' => 'Amd'],
    ['nama_merek' => 'Intel'],
];
DB::table('mereks')->insert($mereks);
  
    }
}

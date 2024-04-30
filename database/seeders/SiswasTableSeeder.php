<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
    ['nama' => 'Iyas Bagus', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Sukamenak', 'agama' => 'Islam', 'telepon' => 1001, 'email' => 'iyas123@gmail.com'],
    ['nama' => 'Bisma Faza', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Cibaduyut', 'agama' => 'Islam', 'telepon' => 1002, 'email' => 'bisma123@gmail.com'],
    ['nama' => 'Rapli Ray', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Sayati', 'agama' => 'Islam', 'telepon' => 1003, 'email' => 'rapli123@gmail.com'],
    ['nama' => 'Gazwan Krisna', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Cibaduyut', 'agama' => 'Islam', 'telepon' => 1004, 'email' => 'gazwan123@gmail.com'],
    ['nama' => 'Ali Rizki', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Rancamanyar', 'agama' => 'Islam', 'telepon' => 1005, 'email' => 'ali123@gmail.com'],
    ['nama' => 'Ksatria Faikar', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Katapang', 'agama' => 'Islam', 'telepon' => 1006, 'email' => 'ksatria123@gmail.com'],
    ['nama' => 'Rasya Razaq', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Rancamanyar', 'agama' => 'Islam', 'telepon' => 1007, 'email' => 'rasya123@gmail.com'],
    ['nama' => 'Alvin Purwo', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Rancamanyar', 'agama' => 'Islam', 'telepon' => 1008, 'email' => 'alvin123@gmail.com'],
    ['nama' => 'Surya Tripatih', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Kopo', 'agama' => 'Islam', 'telepon' => 1009, 'email' => 'surya123@gmail.com'],
    ['nama' => 'Faiz Iclik', 'jenis_kelamin' => 'Pria', 'alamat' => 'Jl. Sayati', 'agama' => 'Islam', 'telepon' => 1010, 'email' => 'faiz123@gmail.com'],
];
DB::table('siswas')->insert($siswas);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
    ['title' => 'Tips Cepat Pergi Haji','content'=>'lorem ipsum'],
    ['title' => 'Haruskah Menunda ?', 'content' => 'lorem ipsum'],
    ['title' => 'Membangun Visi Misi Keluarga', 'content' => 'lorem ipsum'],
];

    DB::table('posts')->insert($posts);
    }
}

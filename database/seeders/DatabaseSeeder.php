<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PenggunasTableSeeder::class);
        $this->call(TeleponsTableSeeder::class);
        $this->call(MereksTableSeeder::class);
        $this->call(ProduksTableSeeder::class);
        $this->call(BaranggsTableSeeder::class);
        $this->call(PembelisTableSeeder::class);
        $this->call(TransaksisTableSeeder::class);
        $this->call(PostsTableSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

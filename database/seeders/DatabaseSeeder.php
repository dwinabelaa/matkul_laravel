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
        \App\Models\Matkul::create([
            'nama' => "Pemrograman Web",
            'sks' => 3
        ]);
        \App\Models\Matkul::create([
            'nama' => "Pemrograman 1",
            'sks' => 3
        ]);
        \App\Models\Matkul::create([
            'nama' => "Pemrograman 2",
            'sks' => 3
        ]);
    }
}

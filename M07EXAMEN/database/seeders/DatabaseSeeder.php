<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llamar a los seeders
        $this->call([
            ClubSeeder::class,
            AtletaSeeder::class,
            // Añade aquí más seeders si los tienes
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    public function run()
    {
        Club::create(['nom' => 'Club_1']);
        Club::create(['nom' => 'Club_2']);
        Club::create(['nom' => 'Club_3']);
    }
}
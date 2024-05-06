<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Atleta;
use App\Models\Club;

class AtletaSeeder extends Seeder
{
    public function run()
    {
        $club1 = Club::where('nom', 'Club_1')->first();
        $club2 = Club::where('nom', 'Club_2')->first();
        $club3 = Club::where('nom', 'Club_3')->first();

        Atleta::create(['nom' => 'Atleta_1_1', 'cognoms' => 'Pendent cognom', 'club_id' => $club1->id]);
        Atleta::create(['nom' => 'Atleta_1_2', 'cognoms' => 'Pendent cognom', 'club_id' => $club1->id]);

        Atleta::create(['nom' => 'Atleta_2_1', 'cognoms' => 'Pendent cognom', 'club_id' => $club2->id]);
        Atleta::create(['nom' => 'Atleta_2_2', 'cognoms' => 'Pendent cognom', 'club_id' => $club2->id]);

        Atleta::create(['nom' => 'Atleta_3_1', 'cognoms' => 'Pendent cognom', 'club_id' => $club3->id]);
        Atleta::create(['nom' => 'Atleta_3_2', 'cognoms' => 'Pendent cognom', 'club_id' => $club3->id]);
    }
}
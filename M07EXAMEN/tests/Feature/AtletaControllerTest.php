<?php

namespace Tests\Feature;

use App\Models\Atleta;
use App\Models\Club;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AtletaControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Crear temporalmente un registro de club
        $club = Club::create(['nom' => 'Club_1']);

        // Realizar la solicitud al endpoint de la API para obtener la lista de atletas
        $response = $this->get('/api/clubs/'.$club->id.'/atletas');

        // Comprobar si la solicitud se ha realizado correctamente
        $response->assertStatus(200);
    }

    public function testShow()
    {
        // Crear temporalmente registros de club y atleta
        $club = Club::create(['nom' => 'Club_1']);
        $atleta = Atleta::create(['nom' => 'Atleta', 'cognoms' => 'Apellidos', 'club_id' => $club->id]);

        // Realizar la solicitud al endpoint de la API para obtener el detalle del atleta
        $response = $this->get('/api/clubs/'.$club->id.'/atletas/'.$atleta->id);

        // Comprobar si la solicitud se ha realizado correctamente
        $response->assertStatus(200);
    }

    public function testStore()
    {
        // Crear temporalmente un registro de club
        $club = Club::create(['nom' => 'Club_1']);

        // Realizar la solicitud al endpoint de la API para agregar un nuevo atleta
        $response = $this->post('/api/clubs/'.$club->id.'/atletas', [
            'nom' => 'Nuevo Atleta',
            'cognoms' => 'Apellidos del Nuevo Atleta',
        ]);

        // Comprobar si la solicitud se ha realizado correctamente
        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        // Crear temporalmente registros de club y atleta
        $club = Club::create(['nom' => 'Club_1']);
        $atleta = Atleta::create(['nom' => 'Atleta', 'cognoms' => 'Apellidos', 'club_id' => $club->id]);

        // Realizar la solicitud al endpoint de la API para modificar los datos del atleta
        $response = $this->put('/api/clubs/'.$club->id.'/atletas/'.$atleta->id, [
            'nom' => 'Atleta Actualizado',
            'cognoms' => 'Apellidos del Atleta Actualizado',
        ]);

        // Comprobar si la solicitud se ha realizado correctamente
        $response->assertStatus(200);
    }

    public function testDestroy()
    {
        // Crear temporalmente registros de club y atleta
        $club = Club::create(['nom' => 'Club_1']);
        $atleta = Atleta::create(['nom' => 'Atleta', 'cognoms' => 'Apellidos', 'club_id' => $club->id]);

        // Realizar la solicitud al endpoint de la API para eliminar el atleta
        $response = $this->delete('/api/clubs/'.$club->id.'/atletas/'.$atleta->id);

        // Comprobar si la solicitud se ha realizado correctamente
        $response->assertStatus(204);
    }
}


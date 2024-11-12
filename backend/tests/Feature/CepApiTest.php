<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CepApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Testa a consulta de um CEP existente.
     *
     * @return void
     */
    public function test_it_can_retrieve_address_by_cep()
    {
        $cep = '88904-180';

        $response = $this->getJson("/api/consulta-cep/{$cep}");

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'cep',
            'logradouro',
            'complemento',
            'bairro',
            'cidade',
            'estado',
            'complemento'
        ]);

        $response->assertJson([
            'cep' => '88904-180',
        ]);
    }

    /**
     * Testa a resposta ao tentar consultar um CEP inválido.
     *
     * @return void
     */
    public function test_it_returns_error_for_invalid_cep()
    {
        $invalidCep = '00000-000';
        $response = $this->getJson("/api/consulta-cep/{$invalidCep}");
        $response->assertStatus(404);
    }
}

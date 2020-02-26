<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CodigoPostalModuleTest extends TestCase
{
    /**
     * Test que comprueba si el codigo postal recibido es de 5 cifras
     *
     * @test
     */
    function codigoPostal5cifras()
    {
        $this->get('/codigo-postal/08034')
            ->assertStatus(200)
            ->assertSee('Codigo Postal : 08034');
    }

    /**
     * Comprueba si el codigo postal recibido tiene menos de 5 cifras falla
     *
     * @test
     */
    function codigoPostalMenosDe5cifras()
    {
        $this->get('/codigo-postal/08')
            ->assertStatus(404);
    }

    /**
     * Comprueba si el codigo postal recibido tiene más de 5 cifras falla
     *
     * @test
     */
    function codigoPostalMasDe5cifras()
    {
        $this->get('/codigo-postal/080251')
            ->assertStatus(404);
    }
}

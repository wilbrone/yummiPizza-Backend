<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PizzaTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
    //  * @return void
     */
    public function testExample()
    {

        $response = $this->get('/api/pizza');

        $response->assertStatus(200);
    }
}

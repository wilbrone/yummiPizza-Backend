<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Pizza;

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
        // $pizzas = factory(Pizza::class)->create([
        //     'name' => 'Sicilian Pizza',
        //     'size' => 'Small',
        //     'description' => 'Has a crunchy crust, and robust tomato sauce. Toppings are bits of tomato, onion, anchovies, and herbs.',
        //     'cost' => 35,
        //     'order_id' => NULL
        // ]);

        $response = $this->get('/api/pizza');

        $response->assertStatus(200);

    }

    public function testSinglePizza(){
        $response = $this->get('/api/pizza/1');

        $response->assertJsonStructure([
            'name',
            'size',
            'description',
            'cost',
            'order_id',
            'created_at',
            'updated_at'
        ]);

    }
}

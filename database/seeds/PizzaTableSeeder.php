<?php

use App\Pizza;
use Illuminate\Database\Seeder;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        // Pizza::truncate();

        // $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        // for ($i = 0; $i < 2; $i++) {
        //     Pizza::create([
        //         'name' => $faker->word,
        //         'size' => $faker->word,
        //         'description' => $faker->sentence,
        //         'cost' => $faker->numberBetween($min = 30, $max = 50),
        //         'order_id' => null
        //     ]);
        // }
    }
}

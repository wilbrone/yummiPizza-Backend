$factory->define(App\Pizza::class,function(Fake\Generator $faker){
    return[
        'name' => $faker->word,
        'size' => $faker->word,
        'description' => $faker->sentence,
        'cost' => $faker->number,
        'order_id' => $faker->null
    ];
});
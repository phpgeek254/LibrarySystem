<?php

use Faker\Generator as Faker;

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
       'title' => $faker->sentence(3),
        'isbn' => $faker->isbn13,
        'category_id' => $faker->numberBetween(1, 20),
        'available' => $faker->boolean(50),
        'author' => $faker->name,
        'in_stock' => $faker->numberBetween(0, 5)
    ];
});

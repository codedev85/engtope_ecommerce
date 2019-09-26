<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CategorySub;
use Faker\Generator as Faker;

$factory->define(CategorySub::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'category_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

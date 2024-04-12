<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Article Factories
|--------------------------------------------------------------------------
|
*/

$factory->define(\wilianx7\Auditing\Tests\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->colorName(),
    ];
});

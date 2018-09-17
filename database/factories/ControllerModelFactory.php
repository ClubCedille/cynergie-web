<?php

use Faker\Generator as Faker;

$factory->define(App\Controller_Model::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'serialnumber' => $faker->buildingNumber,
        'company' => $faker->company,
    ];
});

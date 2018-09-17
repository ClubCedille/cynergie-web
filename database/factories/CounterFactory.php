<?php

use Faker\Generator as Faker;

$factory->define(App\Counter::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'address' => $faker->ipv4,
        'port' => $faker->biasedNumberBetween(1,600),
        'slaveId' => $faker->biasedNumberBetween(1,2),
        'modelid' => function () {
            return factory(App\Controller_Model::class)->create();
        }
    ];
});

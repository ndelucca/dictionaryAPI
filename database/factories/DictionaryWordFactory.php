<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\DictionaryWord::class, function (Faker $faker) {
    return [
        'word' => $faker->text(25),
        'wordtype' => $faker->text(20),
        'definition' => $faker->text(190)
    ];
});

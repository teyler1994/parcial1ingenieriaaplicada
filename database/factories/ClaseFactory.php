<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Clase::class, function (Faker $faker) {
    return [
        'nombre_clase' => $faker->word,
        'orden' => $faker->randomDigitNotNull,
        'horario' => $faker->time($format = 'H:i:s', $max = 'now'),
        'curso_id' => function () {
            return factory(App\Models\Curso::class)->create()->id;
        },
        'estado' => rand(0,1)
    ];
});

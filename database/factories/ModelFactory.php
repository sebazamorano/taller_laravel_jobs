<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Trabajo::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->title,
        'descripcion' => $faker->text(100),
        'beneficios' => $faker->text(10),
        'ambiente_trabajo' => $faker->text(10),
        'sueldo' => $faker->numberBetween(100000, 500000),
        'email' => $faker->unique()->safeEmail,
        'ciudad' => $faker->city,
        'pais' => $faker->country,
        'user_id' => $faker->randomElement(\App\User::get(['id'])->pluck('id')->toArray()),
        'level_id' => $faker->randomElement(\App\Nivel::get(['id'])->pluck('id')->toArray()),
        'tipo_id' => $faker->randomElement(\App\Tipo::get(['id'])->pluck('id')->toArray()),
    ];
});

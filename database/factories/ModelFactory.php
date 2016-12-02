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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Project - ' . $faker->unique()->numberBetween(0,200),
        'description' => $faker->sentence(20),
        'date' => $faker->date,
        'residence' => $faker->city,
        'client' => $faker->firstname, 
    ];
});

$factory->define(App\Discipline::class, function (Faker\Generator $faker) {
    return [
        'name' => 'discipline - ' . $faker->unique()->numberBetween(0,200),
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => 'tag - ' . $faker->unique()->numberBetween(0,200),
    ];
});


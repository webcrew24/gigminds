<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Skill;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Skill::class, function (Faker $faker) {
    return [
        'type' => $faker->name,
        'source' => $faker->name,
        'name' => $faker->name,
        'keyword' => 'keyword',
        'min_threshold' => 1
    ];
});
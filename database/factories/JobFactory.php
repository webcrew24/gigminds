<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'reference_id' => $faker->randomDigit,
        'title' => substr($faker->sentence(2), 0, -1),
        'details' => $faker->paragraph,      
        'city' => $faker->city, 
        'query' => $faker->name,
        'company' => $faker->name, 
        'location' => $faker->city,
        'summary' => $faker->paragraph,
        'salary' => $faker->randomDigit,
        'url' => $faker->url,
        'posting_date' => $faker->dateTime(),
        'keywords_frequency' => $faker->text,
        'reference_id' => $faker->uuid,
        //
    ];
});

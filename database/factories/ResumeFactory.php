<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Resume;
use Faker\Generator as Faker;

$factory->define(Resume::class, function (Faker $faker) {
    return [
        //
        'id' => $faker->uuid,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,      
        'email' => $faker->email, 
        'contact_phone' => $faker->phone,
        'address_line1' => $faker->name, 
        'address_line2' => $faker->streetAddress,
        'city' => $faker->city, 
        'state' => $faker->state,
        'zip_postal' => $faker->zip,
        'country' => $faker->country,
        'current_employer' => $faker->text,
        'current_job_profile' => $faker->text,
        'resume_json' => $faker->text,
        'resume_binary_file' => $faker->text,
        'resume_filename' => $faker->text,
        'source' => $faker->text,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});

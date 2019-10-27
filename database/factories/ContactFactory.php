<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Contact;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 10),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->sentence()
    ];
});
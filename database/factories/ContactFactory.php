<?php

use Faker\Generator as Faker;
use App\Models\Contact;

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
    return array(
        'name'=> $faker->name,
        'email'=> $faker->email,
        'phone'=> $faker->phoneNumber,
        'website'=> $faker->safeEmailDomain,
        'address'=>$faker->address,
    );  
});

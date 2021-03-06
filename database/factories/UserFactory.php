<?php

use Faker\Generator as Faker;
use App\Models\User;

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

$factory->define(User::class, function (Faker $faker) {
    $email = $faker->unique()->safeEmail;
    $token = base64_encode($email."|".rand(1000,9999));
    $username = $this->faker->unique()->userName;
    return array(
        'username'=> $username,
        'email'=> $email,
        'phone'=>$faker->phoneNumber,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'is_admin'=> 0,
        'remember_token'=> $token,
        'verified'=> 1
    );
});

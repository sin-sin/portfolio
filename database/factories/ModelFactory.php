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
use App\User;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    
    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ? : $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->state(User::class,'administrator',function () {
    return [
        'name'           => env('MAIL_FROM_NAME'),
        'email'          => env('MAIL_FROM_ADDRESS'),
        'password'       => bcrypt('Sin@05770874'),
        'role'           => 'administrator',
        'remember_token' => str_random(10),
    ];
});

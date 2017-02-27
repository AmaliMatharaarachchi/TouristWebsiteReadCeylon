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

$factory->define(App\Package::class, function (Faker\Generator $faker) {

    return [
        'package_name' => $faker->name,
        'description' => $faker->paragraph,
        'price' => $faker->randomNumber(),
        'days' => $faker->randomNumber(),
        'route' => $faker->sentence,
        'picture1' => $faker->imageUrl(),
        'picture2' => $faker->imageUrl(),
        'picture3' => $faker->imageUrl(),
//        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {


    return [
        'user_id'=>function(){
            return factory(App\User::class)->create()->id;
        }, 'package_id' => function () {
            return factory(App\Package::class)->create()->id;
        },
        'review' => $faker->paragraph

    ];
});
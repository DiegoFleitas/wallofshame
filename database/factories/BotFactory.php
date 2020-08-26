<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bot;
use Faker\Generator as Faker;

$factory->define(Bot::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'real_name' => $faker->name,
        'location' => $faker->city,
        'profile_created' => $faker->date(),
        'last_online' => $faker->date(),
        'banned' => $faker->boolean,
        'ban_date' => $faker->date(),
        'steamid_64' => $faker->numerify('#################'),
        'vanity_url' => $faker->url,
        'steam_level' => $faker->randomNumber(3),
        'profile_visibility' => $faker->randomDigit,
    ];
});

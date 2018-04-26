<?php

use App\Thread;
use App\User;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->getKey();
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});

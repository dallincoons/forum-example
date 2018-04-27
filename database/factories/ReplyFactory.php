<?php

use App\Reply;
use App\User;
use App\Thread;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->getKey();
        },
        'thread_id' => function() {
            return factory(Thread::class)->create()->getKey();
        },
        'body' => $faker->paragraph
    ];
});

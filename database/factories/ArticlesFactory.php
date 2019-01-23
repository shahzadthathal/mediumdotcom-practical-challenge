<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Articles::class, function (Faker $faker) {
    $title = $faker->sentence(8);
    return [
        'title'=>$title,
        'slug'   => str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($title)))),
        'user_id'=> function () {
            // Get user id
            return App\User::inRandomOrder()->first()->id;
        },
        'topic_id'=> function () {
            // Get topic id
            return App\Models\Topics::inRandomOrder()->first()->id;
        },
        'description'=>$faker->realText(rand(500,1500)),
        'image'=>'https://via.placeholder.com/500x350',
        'tags'=> function () {
            // Get tags
            return App\Models\Tags::inRandomOrder()->first()->name. ',' .App\Models\Tags::inRandomOrder()->first()->name;
        },
    ];
});

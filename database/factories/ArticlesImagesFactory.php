<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ArticlesImages::class, function (Faker $faker) {
    return [
    	'photo'=>'https://via.placeholder.com/300x150',
        'article_id'=>function () {
            // Get Article id
            return App\Models\Articles::inRandomOrder()->first()->id;
        }
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topics::class, function (Faker $faker) {
	$topic = $faker->word(); 
    return [
       'name'=>ucwords($topic),
       'slug'   => str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($topic)))),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $faker ->word,
        'description' => $faker ->sentence,
        'dead_line' => $faker ->date,
        'main_lang' => $faker ->word,
        'rating' => rand(1,10),
    ];
});

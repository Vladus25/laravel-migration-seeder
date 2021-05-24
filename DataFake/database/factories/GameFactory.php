<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
      'Name' => $faker -> firstName,
      'Campaign' => $faker -> company,
      'Release_Date' => $faker -> date,
      'Review' => $faker -> text($maxNbChars = 200) ,
      'Rating' => $faker -> numberBetween($min = 1, $max = 10),
    ];
});

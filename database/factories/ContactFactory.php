<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'phone' => $faker->e164PhoneNumber,
      'notice' => $faker->company,
      'user_id' => App\User::all(['id'])->random(),
    ];
});

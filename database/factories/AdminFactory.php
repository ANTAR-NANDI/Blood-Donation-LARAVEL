<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Registration;
use Faker\Generator as Faker;

$factory->define(Registration::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name('male'|'female'),
        'email' => $faker->companyEmail,
        'password'=> md5('123456'),

        'gender' => 'Male',
        'city' => $faker->city,
        'blood' => 'O+',
        'address' => $faker->address,
        'active' => 0,
        'mobile' => $faker->numberBetween($min = 6000, $max = 9000),
        'weight' => '50kg',
        'role' =>'Admin',
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});

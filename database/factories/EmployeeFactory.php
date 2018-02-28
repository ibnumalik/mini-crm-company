<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'company_id' => rand(1, 10),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->companyEmail,
        'phone' => $faker->phoneNumber
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'email' => $faker->email,
        'logo' => $faker->image('storage/app/public/', 400, 400),
        'website' => $faker->domainName,
    ];
});

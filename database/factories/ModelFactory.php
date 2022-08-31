<?php



use App\Customer;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'address' => $faker->sentence,
        'phone_number' => $faker->sentence,

        'created_at' => $faker->dateTime,

    ];
});

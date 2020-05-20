<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nota;
use Faker\Generator as Faker;

$factory->define(Nota::class, function (Faker $faker) {
    return [
        'user_id' => 2,
        'tgl_transaksi' => $faker->dateTimeBetween('-3 weeks', 'now'),
        'total_belanja' => $faker->numberBetween(500000, 100000000),
        'status' => 'Sudah Dibayar'
    ];
});

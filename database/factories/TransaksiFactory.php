<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaksi;
use Faker\Generator as Faker;

$factory->define(Transaksi::class, function (Faker $faker) {
    return [
        'jumlah' => $faker->numberBetween(1, 5),
        'nama_barang' => $faker->name,
        'harga' => $faker->numberBetween(500000, 50000000),
        'pajak' => $faker->numberBetween(50000, 5000000),
        'produk_id' => $faker->numberBetween(1, 10)
    ];
});

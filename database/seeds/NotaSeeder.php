<?php

use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nota::class, 500)->create()->each(function ($nota) {
            $nota->transaksi()->saveMany(factory(App\Transaksi::class, 3)->make());
        });
    }
}

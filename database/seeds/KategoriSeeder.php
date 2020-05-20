<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'nama_kategori' => 'Laptop',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'Smartphone',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'Accessories',
        ]);
    }
}

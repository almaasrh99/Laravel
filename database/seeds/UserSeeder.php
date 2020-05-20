<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'status'=> 'active',
            'role_id'=> 1,
        ]);
        DB::table('user')->insert([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'admin123',
            'status'=> 'active',
            'role_id'=> 2,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'email' => 'teszt@gmail.com',
            'name' => 'Teszt',
            'password' => Hash::make('qwe'), // secret
        ]);
    }
}

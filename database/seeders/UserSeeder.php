<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Zakiy',
            'email' => 'zakiy@gmail.com',
            'password' => Hash::make('Zakiy')
        ]);
        DB::table('users')->insert([
            'name' => 'Diva',
            'email' => 'diva@gmail.com',
            'password' => Hash::make('Diva')
        ]);
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'password' => Hash::make('John')
        ]);
        DB::table('users')->insert([
            'name' => 'Brian',
            'email' => 'brian@gmail.com',
            'password' => Hash::make('Brian')
        ]);
    }
}

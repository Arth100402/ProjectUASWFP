<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'password' => 'Zakiy'
        ]);
        DB::table('users')->insert([
            'name' => 'Diva',
            'email' => 'diva@gmail.com',
            'password' => 'Diva'
        ]);
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'password' => 'John'
        ]);
        DB::table('users')->insert([
            'name' => 'Brian',
            'email' => 'brian@gmail.com',
            'password' => 'Brian'
        ]);
    }
}

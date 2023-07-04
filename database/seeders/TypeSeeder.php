<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Accessories',
        ]);
        DB::table('types')->insert([
            'name' => 'T-Shirt',
        ]);
        DB::table('types')->insert([
            'name' => 'Makeup',
        ]);
        DB::table('types')->insert([
            'name' => 'Pants',
        ]);
        DB::table('types')->insert([
            'name' => 'Perfume',
        ]);
        DB::table('types')->insert([
            'name' => 'Shoes',
        ]);
        DB::table('types')->insert([
            'name' => 'Skincare',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'user_id' => 1,
            'totalprice' => 100000
        ]);
        DB::table('transactions')->insert([
            'user_id' => 2,
            'totalprice' => 150000
        ]);
        DB::table('transactions')->insert([
            'user_id' => 3,
            'totalprice' => 200000
        ]);
    }
}

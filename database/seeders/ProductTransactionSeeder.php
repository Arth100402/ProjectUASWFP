<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_transaction')->insert([
            'product_id' => 1,
            'transaction_id' => 1,
            'quantity' => 10,
            'price' => 100000
        ]);
        DB::table('product_transaction')->insert([
            'product_id' => 2,
            'transaction_id' => 2,
            'quantity' => 20,
            'price' => 200000
        ]);
        DB::table('product_transaction')->insert([
            'product_id' => 3,
            'transaction_id' => 3,
            'quantity' => 30,
            'price' => 300000
        ]);
    }
}

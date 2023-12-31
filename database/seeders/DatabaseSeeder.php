<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductTransactionSeeder::class);
        // User::factory(10)->create();
    }
}

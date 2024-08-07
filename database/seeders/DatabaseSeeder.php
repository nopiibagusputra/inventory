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
        $this->call(UserSeed::class);
        $this->call(SupplierSeeds::class);
        $this->call(ProductSeeds::class);
        $this->call(VariantSeeds::class);
        $this->call(VariantDetailsSeeds::class);
        $this->call(StockOutSeeder::class);
    }
}

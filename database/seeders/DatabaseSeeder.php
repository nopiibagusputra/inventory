<?php

namespace Database\Seeders;

use App\Models\Bahan_baku;
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
        // $this->call(Bahan_baku_Seed::class);
        // $this->call(Ukuran_Seed::class);
    }
}

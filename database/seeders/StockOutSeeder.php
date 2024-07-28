<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StockOuts;
use App\Models\Variants;
use Faker\Factory as Faker;
use Carbon\Carbon;

class StockOutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Ambil semua variant IDs yang ada
        $variants = Variants::all();

        // Jika tidak ada variant, keluar dari seeder
        if ($variants->isEmpty()) {
            $this->command->info('No variants found. Please seed the variants table first.');
            return;
        }

        foreach (range(1, 200) as $index) {
            $variant = $variants->random();
            $createdAt = Carbon::now()->subDays(rand(0, 365))->toDateTimeString();

            StockOuts::create([
                'userId' => 1,
                'kode_pemesanan' => $faker->unique()->numerify('SO-#####'),
                'variantId' => $variant->id,
                'stock' => $faker->numberBetween(1, 100),
                'created_at' => $createdAt,
                'updated_at' => $createdAt, 
            ]);
        }
    }
}

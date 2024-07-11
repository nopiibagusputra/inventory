<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class VariantDetailsSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function generateRandomDate()
        {
            $start = Carbon::now()->subMonth();
            $end = Carbon::now();
            return Carbon::createFromTimestamp(rand($start->timestamp, $end->timestamp));
        }

        $variants = DB::table('variants')->get();

        foreach ($variants as $variant) {
            // Create variant_detail entries based on the stock value
            for ($i = 0; $i < $variant->stock; $i++) {
                DB::table('variant_detail')->insert([
                    'variantsId' => $variant->id,
                    'item_in' => generateRandomDate(),
                    'status' => 'in',
                ]);
            }
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use DB;

class ProductSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    

    public function run()
    {

        function generatePrUniqueCode()
        {
            do {
                $code = 'PR' . Str::upper(Str::random(2));
            } while (Products::where('code', $code)->exists());

            return $code;
        }

        Schema::disableForeignKeyConstraints();
        Products::truncate();
        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 1,
            'nama'      => 'Spons',
            'satuan' => 'Lembar',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 1,
            'nama'      => 'Bisban',
            'satuan' => 'Meter',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 2,
            'nama'      => 'Karung',
            'satuan' => 'Pcs',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 3,
            'nama'      => 'Sol',
            'satuan' => 'Pasang',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 3,
            'nama'      => 'Thinner',
            'satuan' => 'Kaleng',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 3,
            'nama'      => 'Lem',
            'satuan' => 'Kaleng',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 2,
            'nama'      => 'Cakar',
            'satuan' => 'Lembar',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 1,
            'nama'      => 'Kabulon',
            'satuan' => 'Meter',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 2,
            'nama'      => 'CCI',
            'satuan' => 'Meter',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 2,
            'nama'      => 'Plastik',
            'satuan' => 'Pack',
            'created_by' => 1,
        ]);

        Products::create([
'code' => generatePrUniqueCode(),
            'supplierId' => 1,
            'nama'      => 'Latex',
            'satuan' => 'Botol',
            'created_by' => 1,
        ]);
        Schema::enableForeignKeyConstraints();
    }
}

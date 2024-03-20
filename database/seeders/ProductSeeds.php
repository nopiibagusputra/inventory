<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use Illuminate\Support\Facades\Schema;

class ProductSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Products::truncate();
        Products::create([
            'nama'      => 'Spons',
            'satuan' => 'Lembar',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'Bisban',
            'satuan' => 'Meter',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'Karung',
            'satuan' => 'Pcs',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'Sol',
            'satuan' => 'Pasang',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'Thinner',
            'satuan' => 'Kaleng',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'Lem',
            'satuan' => 'Kaleng',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'Cakar',
            'satuan' => 'Lembar',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'Kabulon',
            'satuan' => 'Meter',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'CCI',
            'satuan' => 'Meter',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'Plastik',
            'satuan' => 'Pack',
            'created_by' => 1,
        ]);

        Products::create([
            'nama'      => 'Latex',
            'satuan' => 'Botol',
            'created_by' => 1,
        ]);
        Schema::enableForeignKeyConstraints();
    }
}

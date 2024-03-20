<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bahan_baku;
use Illuminate\Support\Facades\Schema;
class Bahan_baku_Seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        //buat user admin
        Bahan_baku::truncate();
        Bahan_baku::create([
            'nama_bahan'      => 'Spons',
            'satuan_bahan' => 'Lembar',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'Bisban',
            'satuan_bahan' => 'Meter',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'Karung',
            'satuan_bahan' => 'Pcs',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'Sol',
            'satuan_bahan' => 'Pasang',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'Thinner',
            'satuan_bahan' => 'Kaleng',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'Lem',
            'satuan_bahan' => 'Kaleng',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'Cakar',
            'satuan_bahan' => 'Lembar',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'Kabulon',
            'satuan_bahan' => 'Meter',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'CCI',
            'satuan_bahan' => 'Meter',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'Plastik',
            'satuan_bahan' => 'Pack',
            'dibuat_oleh' => 'Admin',
        ]);

        Bahan_baku::create([
            'nama_bahan'      => 'Latex',
            'satuan_bahan' => 'Botol',
            'dibuat_oleh' => 'Admin',
        ]);
        Schema::enableForeignKeyConstraints();
    }
}

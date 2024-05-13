<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Suppliers;
use Illuminate\Support\Facades\Schema;
class SupplierSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Suppliers::truncate();
        Suppliers::create([
            'kode' => 'PTA',
            'nama' => 'PT Swasembada Asia',
            'alamat' => 'Surabaya',
            'nama_kontak' => 'Toddi',
            'telp' => '0891235678',
            'created_by' => 1,
        ]);

        Suppliers::create([
            'kode' => 'PTM',
            'nama' => 'PT Mikatasa Tenggara',
            'alamat' => 'Surabaya',
            'nama_kontak' => 'Bima',
            'telp' => '0891235678',
            'created_by' => 1,
        ]);

        Suppliers::create([
            'kode' => 'AVA',
            'nama' => 'PT Aman Sentosa Abadi',
            'alamat' => 'Surabaya',
            'nama_kontak' => 'Aldo',
            'telp' => '0891235678',
            'created_by' => 1,
        ]);
    }
}

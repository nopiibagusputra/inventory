<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use Faker\Factory as Faker;

class ProductSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // Daftar nama barang Indonesia
        $nama_barang = ['Lakban', 'Lem', 'Sabun', 'Spons', 'Sikat', 'Tisu', 'Kabel', 'Besi', 'Gergaji', 'Buku', 'Pensil', 'Penghapus'];

        // Inisialisasi array kosong untuk melacak nama barang yang telah digunakan
        $used_nama_barang = [];

        for ($i = 0; $i < 10; $i++) {
            // Ambil nama barang secara acak dari daftar nama barang yang belum digunakan
            do {
                $nama = $faker->randomElement($nama_barang);
            } while (in_array($nama, $used_nama_barang));

            // Tandai nama barang yang telah digunakan
            $used_nama_barang[] = $nama;

            Products::create([
                'nama' => $nama,
                'satuan' => $faker->randomElement(['kg', 'pcs', 'box', 'kaleng']),
                'created_by' => 1
            ]);
        }
    }
}

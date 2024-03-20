<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\Variants;
use Faker\Factory as Faker;

class VariantSeeds extends Seeder
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
        $nama_barang = ['Hitam', 'Biru', 'Merah', 'Hijau', 'Kuning', 'Putih', 'Abu-abu', 'Coklat', 'Oranye', 'Ungu'];

        // Daftar ukuran
        $ukuran = ['2mm', '5mm', '10mm', '20mm', '50mm'];

        // Inisialisasi array kosong untuk melacak nama variant yang telah digunakan
        $used_nama_variant = [];

        // Ambil semua produk dari database
        $products = Products::all();

        // Loop untuk memasukkan data variant ke dalam tabel
        foreach ($products as $product) {
            // Setiap produk memiliki beberapa variant
            for ($i = 0; $i < 5; $i++) {
                // Ambil nama variant secara acak dari daftar nama barang dan ukuran yang belum digunakan
                do {
                    $nama = $faker->randomElement($nama_barang) . ' ' . $faker->randomElement($ukuran);
                } while (in_array($nama, $used_nama_variant));

                // Tandai nama variant yang telah digunakan
                $used_nama_variant[] = $nama;

                Variants::create([
                    'productId' => $product->id,
                    'nama' => $nama,
                    'stock' => $faker->numberBetween(1, 100),
                    'harga' => $faker->randomFloat(2, 10, 100),
                    'created_by' => 1
                ]);
            }
        }
    }
}

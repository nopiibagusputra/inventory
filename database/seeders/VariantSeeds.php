<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\Variants;
use Illuminate\Support\Facades\Schema;

class VariantSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Variants::truncate();
        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 3mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 4mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 20mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hitam 30mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 3mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 4mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 20mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Putih 30mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Kuning 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Kuning 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Kuning 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Kuning 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Kuning 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Kuning 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Krem 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Krem 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Krem 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Krem 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Krem 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Krem 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Pink 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Pink 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Pink 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Pink 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Pink 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Pink 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Biru 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Biru 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Biru 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Biru 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Biru 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Biru 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Maroon 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Maroon 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Maroon 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Maroon 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Maroon 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Maroon 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Abu-abu 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Abu-abu 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Abu-abu 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Abu-abu 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Abu-abu 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Abu-abu 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Hijau 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 6mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 8mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 10mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 12mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Coklat 16mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '1',
            'nama' => 'Semi 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Hitam 1,5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Hitam 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Hitam 2.5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Hitam 3mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Putih 1,5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Putih 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Putih 2.5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Putih 3mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Merah 1.5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Merah 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Merah 2.5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Merah 3mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Coklat 1.5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Coklat 2mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Coklat 2.5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Coklat 3mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '2',
            'nama' => 'Coklat 1.5mm',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '3',
            'nama' => 'Sedang',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '3',
            'nama' => 'Besar',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '4',
            'nama' => 'Kode 08 Uk 28-32',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '4',
            'nama' => 'Kode 08 Uk 33-37',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '4',
            'nama' => 'Kode 08 Uk 38-43',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '4',
            'nama' => 'Kode 09 Uk 38-43',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '4',
            'nama' => 'Polos Uk 28-32',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '4',
            'nama' => 'Polos Uk 33-37',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '4',
            'nama' => 'Polos Uk 38-43',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '5',
            'nama' => 'Sp',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '6',
            'nama' => 'PC 700',
            'stock' => 0,
            
            'harga' => '25000',
        ]);

        Variants::create([
            'productId' => '6',
            'nama' => 'Kijang B',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '6',
            'nama' => 'Weber',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '6',
            'nama' => 'Athena',
            'stock' => 0,
            
            'harga' => '32000',
        ]);

        Variants::create([
            'productId' => '6',
            'nama' => 'Super',
            'stock' => 0,
            
            'harga' => '25000',
        ]);

        Variants::create([
            'productId' => '7',
            'nama' => 'Cakar',
            'stock' => 0,
            
            'harga' => '37000',
        ]);

        Variants::create([
            'productId' => '8',
            'nama' => 'Kabulon',
            'stock' => 0,
            
            'harga' => '35000',
        ]);

        Variants::create([
            'productId' => '9',
            'nama' => 'CCI (Perlak)',
            'stock' => 0,
            
            'harga' => rand(10000, 100000),
        ]);

        Variants::create([
            'productId' => '10',
            'nama' => '03-35',
            'stock' => 0,
            
            'harga' => '15000',
        ]);

        Variants::create([
            'productId' => '10',
            'nama' => '03-40',
            'stock' => 0,
            
            'harga' => '15000',
        ]);

        Variants::create([
            'productId' => '10',
            'nama' => '03-45',
            'stock' => 0,
            
            'harga' => '15000',
        ]);

        Variants::create([
            'productId' => '11',
            'nama' => 'Kecil',
            'stock' => 0,
            
            'harga' => '20000',
        ]);

        Variants::create([
            'productId' => '11',
            'nama' => 'Sedang',
            'stock' => 0,
            
            'harga' => '20000',
        ]);

        Variants::create([
            'productId' => '11',
            'nama' => 'Besar',
            'stock' => 0,
            
            'harga' => '25000',
        ]);
        Schema::enableForeignKeyConstraints();
    }
}

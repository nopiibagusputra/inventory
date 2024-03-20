<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ukuran;
use Illuminate\Support\Facades\Schema;

class Ukuran_Seed extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        

        //buat user admin
        Ukuran::truncate();
        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 3mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 4mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 5mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 20mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hitam 30mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 3mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 4mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 5mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 20mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Putih 30mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Kuning 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Kuning 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Kuning 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Kuning 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Kuning 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Kuning 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Krem 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Krem 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Krem 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Krem 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Krem 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Krem 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Pink 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Pink 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Pink 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Pink 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Pink 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Pink 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Biru 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Biru 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Biru 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Biru 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Biru 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Biru 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Maroon 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Maroon 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Maroon 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Maroon 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Maroon 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Maroon 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Abu-abu 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Abu-abu 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Abu-abu 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Abu-abu 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Abu-abu 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Abu-abu 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Hijau 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 6mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 8mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 10mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 12mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Coklat 16mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '70000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '1',
            'ukuran' => 'Semi 2mm',
            'jumlah' => '50',
            'min_stok' => '30',
            'harga' => '50000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Hitam 1,5mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Hitam 2mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Hitam 2.5mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Hitam 3mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Putih 1,5mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Putih 2mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Putih 2.5mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Putih 3mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Merah 1.5mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Merah 2mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Merah 2.5mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Merah 3mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Coklat 1.5mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Coklat 2mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Coklat 2.5mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Coklat 3mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '2',
            'ukuran' => 'Coklat 1.5mm',
            'jumlah' => '35',
            'min_stok' => '20',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '3',
            'ukuran' => 'Sedang',
            'jumlah' => '50',
            'min_stok' => '20',
            'harga' => '10000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '3',
            'ukuran' => 'Besar',
            'jumlah' => '50',
            'min_stok' => '20',
            'harga' => '12000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '4',
            'ukuran' => 'Kode 08 Uk 28-32',
            'jumlah' => '40',
            'min_stok' => '30',
            'harga' => '60000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '4',
            'ukuran' => 'Kode 08 Uk 33-37',
            'jumlah' => '40',
            'min_stok' => '30',
            'harga' => '60000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '4',
            'ukuran' => 'Kode 08 Uk 38-43',
            'jumlah' => '40',
            'min_stok' => '30',
            'harga' => '60000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '4',
            'ukuran' => 'Kode 09 Uk 38-43',
            'jumlah' => '40',
            'min_stok' => '30',
            'harga' => '50000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '4',
            'ukuran' => 'Polos Uk 28-32',
            'jumlah' => '40',
            'min_stok' => '30',
            'harga' => '50000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '4',
            'ukuran' => 'Polos Uk 33-37',
            'jumlah' => '40',
            'min_stok' => '30',
            'harga' => '50000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '4',
            'ukuran' => 'Polos Uk 38-43',
            'jumlah' => '40',
            'min_stok' => '30',
            'harga' => '50000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '5',
            'ukuran' => 'Sp',
            'jumlah' => '15',
            'min_stok' => '10',
            'harga' => '30000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '6',
            'ukuran' => 'PC 700',
            'jumlah' => '6',
            'min_stok' => '5',
            'harga' => '25000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '6',
            'ukuran' => 'Kijang B',
            'jumlah' => '7',
            'min_stok' => '5',
            'harga' => '30000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '6',
            'ukuran' => 'Weber',
            'jumlah' => '7',
            'min_stok' => '5',
            'harga' => '30000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '6',
            'ukuran' => 'Athena',
            'jumlah' => '8',
            'min_stok' => '5',
            'harga' => '32000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '6',
            'ukuran' => 'Super',
            'jumlah' => '6',
            'min_stok' => '5',
            'harga' => '25000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '7',
            'ukuran' => 'Cakar',
            'jumlah' => '10',
            'min_stok' => '5',
            'harga' => '37000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '8',
            'ukuran' => 'Kabulon',
            'jumlah' => '10',
            'min_stok' => '5',
            'harga' => '35000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '9',
            'ukuran' => 'CCI (Perlak)',
            'jumlah' => '15',
            'min_stok' => '5',
            'harga' => '40000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '10',
            'ukuran' => '03-35',
            'jumlah' => '15',
            'min_stok' => '5',
            'harga' => '15000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '10',
            'ukuran' => '03-40',
            'jumlah' => '15',
            'min_stok' => '5',
            'harga' => '15000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '10',
            'ukuran' => '03-45',
            'jumlah' => '15',
            'min_stok' => '5',
            'harga' => '15000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '11',
            'ukuran' => 'Kecil',
            'jumlah' => '8',
            'min_stok' => '5',
            'harga' => '20000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '11',
            'ukuran' => 'Sedang',
            'jumlah' => '8',
            'min_stok' => '5',
            'harga' => '20000',
        ]);

        Ukuran::create([
            'id_bahan_baku' => '11',
            'ukuran' => 'Besar',
            'jumlah' => '8',
            'min_stok' => '5',
            'harga' => '25000',
        ]);
        Schema::enableForeignKeyConstraints();
    }
}

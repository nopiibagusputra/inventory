<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restock', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pemesanan', 100);
            $table->unsignedBigInteger('productId');
            $table->unsignedBigInteger('variantId');
            $table->unsignedBigInteger('userId');
            $table->integer('stock');
            $table->integer('total_harga');
            $table->smallInteger('status')->default(0); //0 in progress, 1 valid, 2 invalid
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restock');
    }
}

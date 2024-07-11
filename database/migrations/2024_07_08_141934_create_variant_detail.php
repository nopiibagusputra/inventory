<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariantDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variant_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('variantsId');
            $table->dateTime('item_in')->nullable();
            $table->dateTime('item_out')->nullable();
            $table->string('status')->nullable(); // out = item not out, in = item out
            $table->foreign('variantsId')->references('id')->on('variants')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variant_detail');
    }
}

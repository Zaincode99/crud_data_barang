<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) { 
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->string('satuan');
            $table->bigInteger('hrg_jual')->nullable();
            $table->bigInteger('hrg_beli')->nullable();
            $table->bigInteger('profit')->nullable();
            $table->Integer('stok')->nullable();
            $table->timestamps();
       }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
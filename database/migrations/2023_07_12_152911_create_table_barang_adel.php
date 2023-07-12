<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('t_barang_adel', function (Blueprint $table) {
        $table->string('barangid', '10')->primary();
        $table->string('namabarang','45')->nullable();
        $table->string('satuan','45')->nullable();
        $table->string('harga','34')->nullable();
        $table->string('kategoriid','5')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_barang_adel');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
             $table->string('nama_barang');
            $table->dateTime('tgl_masuk');
            $table->integer('harga');
            $table->integer('harga_jual');
            $table->integer('stok');
            $table->string('warna');
            $table->text('spesifikasi');
            $table->string('foto');
            $table->integer('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategori');
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
        Schema::dropIfExists('produk');
    }
}

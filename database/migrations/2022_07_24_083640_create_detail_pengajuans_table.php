<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('pengajuan_id');
            $table->string('nama_barang');
            $table->longText('spesifikasi');
            $table->string('satuan');
            $table->string('harga_toko1');
            $table->string('harga_toko2')->nullable();
            $table->string('harga_toko3')->nullable();
            $table->string('gambar_survey')->nullable();
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
        Schema::dropIfExists('detail_pengajuans');
    }
};

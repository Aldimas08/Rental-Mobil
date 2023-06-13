<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jenis') -> unsigned();
            $table->integer('id_kategori') -> unsigned();
            $table->string('nama_kendaraan');
            $table->string('warna');
            $table->integer('plat_nomor');
            $table->string('foto');
            $table->integer('tahun');
            $table->integer('tarif');
            //fungsi cascade adalah ketika 1 data pada 1 tabel dihapus, maka di tabel lain juga akan terhapus
            $table->foreign('id_jenis') -> references('id') -> on('jenis') -> onDelete('cascade') -> onUpdate('cascade');
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
        Schema::dropIfExists('kendaraan');
    }
}

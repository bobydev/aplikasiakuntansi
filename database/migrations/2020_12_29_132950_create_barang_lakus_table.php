<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangLakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_lakus', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->text('nama');
            $table->double('jumlah');
            $table->double('harga');
            $table->double('total_harga');
            $table->double('laba');
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
        Schema::dropIfExists('barang_lakus');
    }
}

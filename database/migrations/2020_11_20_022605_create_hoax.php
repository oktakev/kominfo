<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoax extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoax', function (Blueprint $table) {
            $table->increments('id_hoax');
            $table->string('judul', 255);
            $table->tinyInteger('id_kategori');
            $table->string('link_sumber', 255);
            $table->dateTime('tanggal_upload');
            $table->string('gambar', 255);
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoax');
    }
}

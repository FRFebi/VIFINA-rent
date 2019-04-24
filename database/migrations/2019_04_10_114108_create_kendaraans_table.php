<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_id')->unsigned();
            $table->string('nama');
            $table->string('platno')->unique();
            $table->integer('harga');
            $table->string('deskripsi')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('pintu')->nullable();
            $table->string('transmisi')->nullable();
            $table->string('status');
            $table->string('img');
            $table->timestamps();
        });

        Schema::table('kendaraans', function (Blueprint $table){
            $table->foreign('jenis_id')->references('id')->on('jenises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}

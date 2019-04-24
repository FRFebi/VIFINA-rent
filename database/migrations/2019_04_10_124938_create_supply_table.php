<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rental_id')->unsigned();
            $table->integer('kendaraan_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('supply', function($table) {
          $table->foreign('rental_id')->references('id')->on('rentals')->onDelete('cascade');
          $table->foreign('kendaraan_id')->references('id')->on('kendaraans')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply');
    }
}

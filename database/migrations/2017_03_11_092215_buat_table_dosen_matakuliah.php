<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id',false,true);
            $table->foregin('dosen_id')->references('id')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('matakuliah_id'),false,true);
            $table->integer('matakuliah_id'),references('id')->on('matakuliah')->('cascade')->onUpdate('cascade');
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
        Schema::drop('dosen_matakuliah');
    }
}

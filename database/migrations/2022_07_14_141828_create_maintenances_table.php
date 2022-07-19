<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->foreignId("databarang_id")->references('id')->on('data_barangs')->onDelete('cascade')->onUpdate('cascade');
            $table->date("tanggal");
            $table->string("user_awal");
            $table->string("posisi_awal");
            $table->string("lantai");
            $table->string("ram");
            $table->string("prosesor");
            $table->string("kondisi");
            $table->string("pic");
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
        Schema::dropIfExists('maintenances');
    }
}

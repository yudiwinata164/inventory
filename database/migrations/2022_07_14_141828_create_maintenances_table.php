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
            $table->string("jenis_maintenance");
            $table->string("pic");
            $table->string("user");
            $table->string("unit");
            $table->string("service");
            $table->date("estimasi");
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

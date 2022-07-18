<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barangs', function (Blueprint $table) {
            $table->id();
            $table->date("tanggal_terima");
            $table->string("nama_barang");
            $table->string("kode_barang")->unique();
            $table->string("ip_sistem");
            $table->string("spesifikasi");
            $table->string("vendor");
            $table->string("password_teamviewer")->nullable();
            $table->string("password_anydesk")->nullable();
            $table->string("status");
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
        Schema::dropIfExists('data_barangs');
    }
}

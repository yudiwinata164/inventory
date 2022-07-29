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
            $table->string("kode_barang")->unique()->nullable();
            $table->string("nama_barang");
            $table->string("kategori");
            $table->string("seri_perangkat")->unique();
            $table->string("serial_number")->unique()->nullable();
            $table->string("ram");
            $table->string("prosesor");
            $table->string("password_teamviewer")->nullable();
            $table->string("password_anydesk")->nullable();
            $table->string("status");
            $table->date("tanggal_terima");
            $table->date("tanggal_distribusi")->nullable();
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

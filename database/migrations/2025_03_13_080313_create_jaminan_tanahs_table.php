<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaminan_tanahs', function (Blueprint $table) {
            $table->id();
            $table->string('status_jaminan');
            $table->string('no_sertifikat');
            $table->string('status_kepemilikan');
            $table->string('imb');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->string('lokasi');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('atas_nama');
            $table->string('nilai_jaminan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jaminan_tanahs');
    }
};

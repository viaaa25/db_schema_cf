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
        Schema::create('jaminan_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status_jaminan');
            $table->string('merk');
            $table->string('type_kendaraan');
            $table->string('tahun');
            $table->string('warna');
            $table->string('atas_nama');
            $table->string('no_polisi');
            $table->string('no_rangka');
            $table->string('no_mesin');
            $table->string('no_bpkb');
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
        Schema::dropIfExists('jaminan_kendaraans');
    }
};

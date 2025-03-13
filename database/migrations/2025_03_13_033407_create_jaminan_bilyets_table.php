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
        Schema::create('jaminan_bilyets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status_jaminan');
            $table->string('no_bilyet');
            $table->dateTime('tanggal_valuta');
            $table->string('jangka_waktu');
            $table->string('nominal');
            $table->string('atas_nama');
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
        Schema::dropIfExists('jaminan_bilyets');
    }
};

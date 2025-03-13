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
        Schema::create('cr_prospects', function (Blueprint $table) {
            $table->string('id');
            $table->string('NAME');
            $table->dateTime('VISIT_DATE');
            $table->dateTime('TIME_INPUT');
            $table->string('OFFICER_ID');
            $table->string('ID_NUMBER');
            $table->string('KK_NUMBER');
            $table->string('ADDRESS');
            $table->string('PHONE');
            $table->string('SECTOR');
            $table->decimal('PCT', 6, 2);
            $table->string('RESULT');
            $table->string('PATH');
            $table->string('COL_TYPE');
            $table->string('COL_NUMBER');
            $table->decimal('COL_VAL', 20, 2);
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
        Schema::dropIfExists('cr_prospects');
    }
};

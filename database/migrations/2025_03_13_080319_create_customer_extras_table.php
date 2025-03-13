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
        Schema::create('customer_extras', function (Blueprint $table) {
            $table->string('id');
            $table->string('STATUS_RECORD');
            $table->string('CUSTOMER_CODE');
            $table->string('NAME_1');
            $table->string('NAME_2');
            $table->string('NAME_3');
            $table->string('NAME_4');
            $table->string('ADDRESS_1');
            $table->string('ADDRESS_2');
            $table->string('ADDRESS_EXT_1');
            $table->string('ADDRESS_EXT_2');
            $table->string('ADDRESS_3');
            $table->string('ADDRESS_4');
            $table->string('CITY');
            $table->string('ZIP_CODE');
            $table->string('PROVINCE');
            $table->string('RT_RW');
            $table->string('AREA_CODE_PHONE_1');
            $table->string('PHONE_1');
            $table->string('AREA_CODE_PHONE_2');
            $table->string('PHONE_2');
            $table->string('AREA_CODE_PHONE_3');
            $table->string('PHONE_3');
            $table->string('CELLULER_1');
            $table->string('CELLULER_2');
            $table->string('CELLULER_3');
            $table->string('AREA_CODE_FAX_1');
            $table->string('FAX_NUMBER_1');
            $table->string('AREA_CODE_FAX_2');
            $table->string('FAX_NUMBER_2');
            $table->string('AREA_CODE_FAX_3');
            $table->string('FAX_NUMBER_3');
            $table->string('SUMBER_PENGHASILAN_1');
            $table->string('SUMBER_DANA');
            $table->string('TUJUAN_GUNA_DANA');
            $table->string('IBU_KANDUNG');
            $table->string('PASANGAN');
            $table->string('TEMPAT_LAHIR');
            $table->string('TGL_LAHIR');
            $table->string('NO_ID');
            $table->string('SUMBER_PENGHASILAN_2');
            $table->string('PEKERJAAN');
            $table->string('ALAMAT_1');
            $table->string('ALAMAT_2');
            $table->string('KOTA');
            $table->string('NAMA_PENJAMIN');
            $table->string('ALAMAT_PENJAMIN_1');
            $table->string('ALAMAT_PENJAMIN_2');
            $table->string('KOTA_PENJAMIN');
            $table->string('PHONE_PENJAMIN');
            $table->string('HUB_DEBITUR');
            $table->date('DATE_INPUT');
            $table->string('TIME_INPUT');
            $table->string('USER_INPUT');
            $table->string('USER_OTOR');
            $table->string('TIME_OTOR');
            $table->date('DATE_LAST_UPDATE');
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
        Schema::dropIfExists('customer_extras');
    }
};

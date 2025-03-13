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
        Schema::create('customers', function (Blueprint $table) {
            $table->string('id');
            $table->string('STATUS_RECORD');
            $table->string('CUSTOMER_CODE');
            $table->string('CUSTOMER_NAME');
            $table->string('TITLE');
            $table->string('CUST_ADDRESS_1');
            $table->string('CUST_ADDRESS_2');
            $table->string('CUST_ADDRESS_3');
            $table->string('PHONE_NUMBER_1');
            $table->string('PHONE_NUMBER_2');
            $table->string('FAX_NUMBER');
            $table->string('INSTITUT_CODE');
            $table->string('SHORT_NAME_CUST');
            $table->string('BRANCH');
            $table->string('FLAG_PARENT_CUST');
            $table->string('PARENT_NUMBER');
            $table->string('AO_CODE');
            $table->string('INSDUSTRY_CODE');
            $table->string('AREA_CODE');
            $table->string('NPWP');
            $table->date('BEGIN_DATE_CUST');
            $table->string('AUTORIZER');
            $table->string('OPERATOR_ID');
            $table->date('DATE_EDIT');
            $table->string('AGAMA');
            $table->string('PEKERJAAN');
            $table->string('JENIS_KELAMIN');
            $table->date('BIRTH_DATE');
            $table->string('ID_CARD_NUMBER');
            $table->date('ID_EXPIRED_DATE');
            $table->string('COUNTRY');
            $table->string('CONTACT_PERSON');
            $table->string('CUSTOMER_TYPE');
            $table->string('PPH_TYPE');
            $table->string('GOL_PEMILIK');
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
        Schema::dropIfExists('customers');
    }
};

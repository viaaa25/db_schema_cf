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
        Schema::create('cr_prospect_documents', function (Blueprint $table) {
            $table->string('id');
            $table->string('PATH');
            $table->date('SUBMIT_DATE');
            $table->string('INDEX_NUM');
            $table->string('VALID_CHECK');
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
        Schema::dropIfExists('cr_prospect_documents');
    }
};

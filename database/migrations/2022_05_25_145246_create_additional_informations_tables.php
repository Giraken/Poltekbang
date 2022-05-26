<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalInformationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_informations', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('message_id');
            $table->string('route')->nullable();
            $table->string('STS/')->nullable();
            $table->string('PBN/')->nullable();
            $table->string('NAV/')->nullable();
            $table->string('COM/')->nullable();
            $table->string('DAT/')->nullable();
            $table->string('SUR/')->nullable();
            $table->string('DEP/')->nullable();
            $table->string('DEST/')->nullable();
            $table->string('REG/')->nullable();
            $table->string('EET/')->nullable();
            $table->string('SEL/')->nullable();
            $table->string('TYP/')->nullable();
            $table->string('CODE/')->nullable();
            $table->string('DLE/')->nullable();
            $table->string('OPR/')->nullable();
            $table->string('ORGN/')->nullable();
            $table->string('PER/')->nullable();
            $table->string('ALTN/')->nullable();
            $table->string('RALT/')->nullable();
            $table->string('TALT/')->nullable();
            $table->string('RIF/')->nullable();
            $table->string('RMK/')->nullable();
            $table->string('supp_endurance')->nullable();
            $table->string('supp_people')->nullable();
            $table->string('supp_radio')->nullable();
            $table->string('supp_survival')->nullable();
            $table->string('supp_jacket')->nullable();
            $table->string('supp_cover')->nullable();
            $table->string('supp_color')->nullable();
            $table->string('supp_aircraft_color')->nullable();
            $table->string('supp_remark')->nullable();
            $table->string('supp_remark_desc')->nullable();
            $table->string('supp_pilot')->nullable();
            $table->string('supp_reserved')->nullable();
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
        Schema::dropIfExists('additional_informations');
    }
}

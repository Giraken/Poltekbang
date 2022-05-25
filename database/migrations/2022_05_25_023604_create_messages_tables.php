<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('user_id');
            $table->string('type');
            $table->string('aircraft_id');
            $table->string('dep_id');
            $table->string('time');
            $table->string('dest_id');
            $table->string('dof');
            $table->string('filed_by');
            $table->string('fpl_status')->nullable();
            $table->string('fpl_permit')->nullable();
            $table->string('fpl_reg')->nullable();
            $table->string('fpl_flight_rules')->nullable();
            $table->string('fpl_flight_type')->nullable();
            $table->string('fpl_number')->nullable();
            $table->string('fpl_aircraft_type')->nullable();
            $table->string('fpl_wake_turb')->nullable();
            $table->string('fpl_aircraft_equipment')->nullable();
            $table->string('fpl_surveillance_equipment')->nullable();
            $table->string('fpl_eet')->nullable();
            $table->string('fpl_1_altn')->nullable();
            $table->string('fpl_2_altn')->nullable();
            $table->string('fpl_cruising_speed')->nullable();
            $table->string('fpl_cruising_level')->nullable();
            $table->string('chg_amandement')->nullable();
            $table->string('dep_ssr')->nullable();
            $table->string('dep_code')->nullable();
            $table->string('arr_id')->nullable();
            $table->string('arr_aerodrome')->nullable();
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
        Schema::dropIfExists('messages');
    }
}

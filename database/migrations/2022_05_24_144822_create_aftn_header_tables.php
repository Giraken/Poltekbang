<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAftnHeaderTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aftn_header', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('message_id');
            $table->ForeignId('user_id');
            $table->string('priority');
            $table->string('filing_time')->nullable();
            $table->string('originator');
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('address4')->nullable();
            $table->string('address5')->nullable();
            $table->string('address6')->nullable();
            $table->string('address7')->nullable();
            $table->string('address8')->nullable();
            $table->string('address9')->nullable();
            $table->string('address10')->nullable();
            $table->string('address11')->nullable();
            $table->string('address12')->nullable();
            $table->string('address13')->nullable();
            $table->string('address14')->nullable();
            $table->string('address15')->nullable();
            $table->string('address16')->nullable();
            $table->string('address17')->nullable();
            $table->string('address18')->nullable();
            $table->string('address19')->nullable();
            $table->string('address20')->nullable();
            $table->string('address21')->nullable();
            $table->string('address22')->nullable();
            $table->string('address23')->nullable();
            $table->string('address24')->nullable();
            $table->string('address25')->nullable();
            $table->string('address26')->nullable();
            $table->string('address27')->nullable();
            $table->string('address28')->nullable();
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
        Schema::dropIfExists('aftn_header');
    }
}

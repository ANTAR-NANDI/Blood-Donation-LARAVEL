<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patientname');
            $table->string('hospitaladdress');
            $table->string('blood');
               $table->string('city');
                $table->string('amount');
                  $table->date('date');
                $table->bigInteger('donorid')->unsigned()->index();
            $table->foreign('donorid')
                   ->references('id')->on('registrations')
                   ->onDelete('cascade');
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
        Schema::dropIfExists('donations');
    }
}

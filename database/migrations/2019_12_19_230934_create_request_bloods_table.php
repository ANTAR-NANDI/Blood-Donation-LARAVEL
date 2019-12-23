<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_bloods', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('patientname');
            $table->string('hospitaladdress');
            $table->string('blood');
            
             
               $table->string('city');
                $table->string('amount');
                $table->integer('contactnumber');
                 $table->date('required');
                $table->string('message');
                $table->string('contactemail');
                $table->string('contactname');
             $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')
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
        Schema::dropIfExists('request_bloods');
    }
}

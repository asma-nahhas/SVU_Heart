<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('emailAddress');
            $table->string('address');
            $table->string('phoneNumber');
            $table->string('gender');
            $table->string('age');
            $table->string('chest_pain_type');
            $table->string('rest_blood_pressure');
            $table->string('max_heart_rate');
            $table->string('rest_electro');
            $table->string('exerscice_angina');
            $table->string('blood_sugar');
            $table->longText('note');
            $table->longText('response');
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
        Schema::dropIfExists('appointment');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicDentistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_dentist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("dentist_id");
            $table->integer("clinic_id");
            $table->string("days");
            $table->time("start_time");
            $table->time("end_time");
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
        Schema::dropIfExists('clinic_dentist');
    }
}

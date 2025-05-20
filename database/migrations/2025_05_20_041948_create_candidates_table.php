<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vacancy');
            $table->string('name');
            $table->string('email');
            $table->string('location');
            $table->string('education');
            $table->string('major');
            $table->text('experience');
            $table->string('cv_path'); // untuk menyimpan path file CV
            $table->timestamps();

            $table->foreign('id_vacancy')->references('id')->on('vacancies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}

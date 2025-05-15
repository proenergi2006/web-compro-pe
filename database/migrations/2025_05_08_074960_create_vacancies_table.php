<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dept');
            $table->unsignedBigInteger('id_prov');
            $table->string('title');
            $table->string('slug');
            $table->string('status',1);
            $table->enum('employee_status', ['Permanent', 'Contract','Internship']); 
            $table->string('min_year',2);
            $table->longText('description');
            $table->longText('requirement');
            $table->date('due_date');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_dept')->references('id')->on('departments');
            $table->foreign('id_prov')->references('id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancy');
    }
}

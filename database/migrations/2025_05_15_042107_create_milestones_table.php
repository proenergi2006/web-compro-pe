<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilestonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('milestones', function (Blueprint $table) {
        $table->id();
        $table->year('start_year');
        $table->year('end_year');
        $table->string('title');
        $table->string('photo')->nullable(); // Path ke foto atau nama file
        $table->text('description')->nullable();
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
        Schema::dropIfExists('milestones');
    }
}

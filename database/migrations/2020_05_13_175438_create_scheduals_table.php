<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduals', function (Blueprint $table) {
            $table->id();
            $table->string('generation_id');
            $table->string('schedual_id');
            $table->string('meeting_time');
            $table->string('meeting_time_id')->nullable();
            $table->string('departement');
            $table->string('coure');
            $table->string('CourMaxStudents');
            $table->string('enseignant');
            $table->string('instructor_id');
            $table->string('salle');
            $table->string('salleMax');


      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheduals');
    }
}

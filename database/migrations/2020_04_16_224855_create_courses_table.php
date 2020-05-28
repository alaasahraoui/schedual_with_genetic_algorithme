<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
    
            $table->string("course_code");
            $table->string("course_nom");
            $table->integer("course_max");
            $table->string("fondamental")->nullable(); 
            $table->string("type")->nullable();
            $table->string('specialite');
            $table->string('section');
            $table->string('groupe')->nullable();
            $table->bigIncrements('id');

        
 


 
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

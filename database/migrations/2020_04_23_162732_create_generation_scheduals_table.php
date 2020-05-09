<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerationSchedualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generation_scheduals', function (Blueprint $table) {
            $table->integer('generation_idd');
            $table->unsignedInteger('generation_id')->nullable();
            $table->string('schaduale_id');
            $table->float('schadual_fitness');
            $table->string('schadual_classes');




            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generation_scheduals');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('food_id');
            $table->unsignedInteger('food_ingredient_id');
            $table->foreign('food_ingredient_id')->references('ingredient_id')->on('food_ingredients');
            $table->string('food_name', 150);
            $table->string('food_prep_description', 150);
            $table->integer('food_prep_time');
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
        Schema::dropIfExists('foods');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diets', function (Blueprint $table) {
            $table->increments('diet_id');
            $table->unsignedInteger('diet_food_id');
            $table->foreign('diet_food_id')->references('food_id')->on('foods');
            $table->date('diet_date');
            $table->enum('diet_meal_type', ['breakfast', 'lunch', 'dinner', 'snack']);
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
        Schema::dropIfExists('diets');
    }
}

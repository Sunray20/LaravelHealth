<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodFoodIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_food_ingredient', function (Blueprint $table) {
            $table->integer('food_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();

            $table->foreign('food_id')
                ->references('food_id')
                ->on('foods')
                ->onDelete('cascade');

            $table->foreign('ingredient_id')
                ->references('ingredient_id')
                ->on('food_ingredients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_food_ingredient');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diet_food', function (Blueprint $table) {
            $table->integer('food_id')->unsigned();
            $table->integer('diet_id')->unsigned();

            $table->foreign('food_id')
                ->references('food_id')
                ->on('foods')
                ->onDelete('cascade');

            $table->foreign('diet_id')
                ->references('diet_id')
                ->on('diets')
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
        Schema::dropIfExists('diet_food');
    }
}

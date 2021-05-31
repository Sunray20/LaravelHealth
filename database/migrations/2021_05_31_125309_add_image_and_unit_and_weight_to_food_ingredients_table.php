<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageAndUnitAndWeightToFoodIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food_ingredients', function (Blueprint $table) {
            $table->integer('ingredient_weight');
            $table->enum('ingredient_unit', ['g', 'oz', 'ml']);
            $table->string('ingredient_image_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food_ingredients', function (Blueprint $table) {
            $table->dropColumn('ingredient_weight');
            $table->dropColumn('ingredient_unit');
            $table->dropColumn('ingredient_image_path');
        });
    }
}

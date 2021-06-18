<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_ingredients', function (Blueprint $table) {
            $table->increments  ('ingredient_id');
            $table->string      ('ingredient_name', 60);
            $table->integer     ('ingredient_kcal');
            $table->integer     ('ingredient_protein');
            $table->integer     ('ingredient_carb');
            $table->integer     ('ingredient_fat');
            $table->integer     ('ingredient_weight');
            $table->enum        ('ingredient_unit', ['g', 'oz', 'ml']);
            $table->string      ('ingredient_image_path');
            $table->timestamps  ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_ingredients');
    }
}

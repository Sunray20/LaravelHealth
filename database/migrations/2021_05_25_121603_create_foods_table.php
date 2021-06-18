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
            $table->increments  ('food_id');
            $table->integer     ('food_user_id');
            $table->string      ('food_name', 150);
            $table->string      ('food_prep_description', 150);
            $table->integer     ('food_prep_time');
            $table->integer     ('food_prep_difficulty');
            $table->string      ('food_image_path');
            $table->tinyInteger ('food_is_private');
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
        Schema::dropIfExists('foods');
    }
}

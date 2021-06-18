<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodIngredient extends Model
{
    use HasFactory;

    protected $primaryKey = 'ingredient_id';

    protected $table = 'food_ingredients';

    protected $fillable = ['ingredient_name','ingredient_kcal',
                           'ingredient_protein','ingredient_carb',
                           'ingredient_fat', 'ingredient_weight',
                           'ingredient_unit', 'ingredient_image_path'];

    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_food_ingredient', 'ingredient_id', 'food_id',);
    }
}

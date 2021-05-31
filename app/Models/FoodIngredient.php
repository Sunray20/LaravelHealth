<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Kelleni fog az egység és a tömege is az alapanyagnak
class FoodIngredient extends Model
{
    use HasFactory;

    protected  $primaryKey = 'ingredient_id';

    protected $fillable = ['ingredient_name','ingredient_kcal',
                           'ingredient_protein','ingredient_carb',
                           'ingredient_fat', 'ingredient_weight',
                           'ingredient_unit', 'ingredient_image_path'];

    public function Food()
    {
        return $this->belongsTo(Food::class);
    }
}

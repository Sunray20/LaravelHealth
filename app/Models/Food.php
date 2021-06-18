<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $primaryKey = 'food_id';

    protected $table = 'foods';

    public function foodIngredients()
    {
        return $this->belongsToMany(FoodIngredient::class, 'food_food_ingredient', 'food_id', 'ingredient_id');
    }
}

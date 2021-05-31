<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected  $primaryKey = 'food_id';

    public function FoodIngredients()
    {
        return $this->hasMany(FoodIngredient::class);
    }

    public function Diet()
    {
        return $this->belongsTo(Diet::class);
    }
}

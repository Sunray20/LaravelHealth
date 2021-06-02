<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DietController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodIngredientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('foods.index');
});

Route::resources([
    'diets' => DietController::class,
    'foods' => FoodController::class,
    'food-ingredients' => FoodIngredientController::class,
]);

Auth::routes();

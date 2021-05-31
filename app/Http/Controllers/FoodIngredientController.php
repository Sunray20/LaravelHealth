<?php

namespace App\Http\Controllers;

use App\Models\FoodIngredient;
use Illuminate\Http\Request;
use App\Http\Requests\FoodIngredientRequest;

class FoodIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = FoodIngredient::all();

        return view('foodIngredients.index', ['ingredients' => $ingredients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foodIngredients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodIngredientRequest $request)
    {
        $request->validated();

        $newImageName = time() . '-' . $request->name . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $ingredient = FoodIngredient::create([
            'ingredient_name' => $request->input('name'),
            'ingredient_kcal' => $request->input('kcal'),
            'ingredient_protein' => $request->input('protein'),
            'ingredient_carb' => $request->input('carb'),
            'ingredient_fat' => $request->input('fat'),
            'ingredient_weight' => $request->input('weight'),
            'ingredient_unit' => $request->input('unit'),
            'ingredient_image_path' => $newImageName,
        ]);

        return redirect('/food-ingredients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingredient = FoodIngredient::find($id);

        return view('foodIngredients.show', ['ingredient' => $ingredient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredient = FoodIngredient::find($id);

        return view('foodIngredients.edit')->with('ingredient', $ingredient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoodIngredientRequest $request, $id)
    {
        $request->validated();

        $ingredient = FoodIngredient::find($id);

        $ingredient = FoodIngredient::where('ingredient_id', $id)->update([
            'ingredient_name' => $request->input('name'),
            'ingredient_kcal' => $request->input('kcal'),
            'ingredient_protein' => $request->input('protein'),
            'ingredient_carb' => $request->input('carb'),
            'ingredient_fat' => $request->input('fat'),
        ]);

        return redirect('/food-ingredients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingredient = FoodIngredient::find($id);
        $ingredient->delete();

        return redirect('/food-ingredients');
    }
}

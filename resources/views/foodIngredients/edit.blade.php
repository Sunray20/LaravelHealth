@extends('layouts.layout')

@section('content')

    <div class="text-center">
        <h2>Edit ingredient</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/food-ingredients/{{ $ingredient->ingredient_id }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $ingredient->ingredient_name }}">
            <input type="text" name="kcal" value="{{ $ingredient->ingredient_kcal }}">
            <input type="text" name="protein" value="{{ $ingredient->ingredient_protein }}">
            <input type="text" name="carb" value="{{ $ingredient->ingredient_carb }}">
            <input type="text" name="fat" value="{{ $ingredient->ingredient_fat }}">
            <input type="text" name="weight" value="{{ $ingredient->ingredient_weight }}">
            <input type="text" name="unit" value="{{ $ingredient->ingredient_unit }}">

            <button type="submit">Submit</button>
        </form>
    </div>

@endsection

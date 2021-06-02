@extends('layouts.app')

@section('content')
    @isset($ingredient)
        <h2>{{ $ingredient->ingredient_name }}</h2>
        <p>{{ $ingredient->ingredient_kcal }}</p>
        <p>{{ $ingredient->ingredient_protein }}</p>
        <p>{{ $ingredient->ingredient_fat }}</p>
        <p>{{ $ingredient->ingredient_carb }}</p>
    @endisset

    @empty($ingredient)
        <p>Error in querying the ingredient!</p>
    @endempty
@endsection

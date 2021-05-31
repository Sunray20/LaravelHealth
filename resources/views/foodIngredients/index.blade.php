@extends('layouts.layout')

@section('content')
    <h2 style = "margin-top: 5rem;">Food ingredients</h2>
    <div class="row">
        <div class="card col-md-4">
            <img src="..." class="card-img-top" alt="Add new ingredient">
            <div class="card-body">
            <h5 class="card-title">Add new ingredient</h5>
            <a href="{{ URL('food-ingredients/create') }}" class="btn btn-primary">Add</a>
            </div>
        </div>

        @forelse ($ingredients as $ingredient)
            <div class="card col-md-4">
                <img src="{{ asset('images/' . $ingredient->ingredient_image_path) }}"
                     class="card-img-top w-100 h-50"
                     alt="{{ $ingredient->ingredient_name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $ingredient->ingredient_name }}</h5>
                    <p class="card-text">
                        {{ $ingredient->ingredient_kcal . " kcal "
                        . $ingredient->ingredient_protein . " prot "
                        . $ingredient->ingredient_fat . " fat "
                        . $ingredient->ingredient_carb . " carb "
                        }}
                    </p>

                    <a href="food-ingredients/{{ $ingredient->ingredient_id }}" class="btn btn-primary">More details</a>
                    <a href="food-ingredients/{{ $ingredient->ingredient_id }}/edit" class="btn btn-primary">Modify</a>
                    <form action="food-ingredients/{{ $ingredient->ingredient_id }}" method="POST">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger" type="submit">Delete ingredient</button>
                    </form>
                </div>
            </div>
        @empty
            <p>There are no ingredients yet! If you want to add, click here!</p>
            <button>Add</button>
        @endforelse
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <h2 style = "margin-top: 5rem;">Food ingredients</h2>
    <div class="row">
        <div class="card col-md-4">
            <a href="{{ URL('food-ingredients/create') }}">
                <i class="fas fa-plus-circle fa-10x h-50 mr-auto ml-auto" style="display: inline-block;
                width: 100%;"></i>
            </a>

            <div class="card-body">
                <h5 class="card-title">Add new ingredient</h5>
            </div>
        </div>

        @forelse ($ingredients as $ingredient)
            <div class="card col-md-4">
                @if(!empty($ingredient->ingredient_image_path))
                    <img src="{{ asset('images/' . $ingredient->ingredient_image_path) }}"
                         class="card-img-top w-100 h-50 mt-2"
                         alt="{{ $ingredient->ingredient_name }}">
                @else
                    <img src="{{ asset('images/missing-image.png') }}"
                         class="card-img-top w-100 h-50 mt-2"
                         alt="missing image">
                @endif

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

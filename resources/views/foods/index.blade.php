@extends('layouts.app')

@section('content')
<h2>Foods</h2>
    <div class="row">
        <div class="card col-md-4">
            <a href="{{ URL('foods/create') }}">
                <i class="fas fa-plus-circle fa-10x h-50 mr-auto ml-auto" style="display: inline-block;
                width: 100%;"></i>
            </a>

            <div class="card-body">
                <h5 class="card-title">Add new food</h5>
            </div>
        </div>
        @isset($foods)
            @foreach ($foods as $food)
                <div class="card col-md-4">
                    @if(!empty($food->food_image_path))
                        <img src="{{ asset('images/' . $food->food_image_path) }}"
                            class="card-img-top w-100 h-50 mt-2"
                            alt="{{ $food->food_name }}">
                    @else
                        <img src="{{ asset('images/missing-image.png') }}"
                            class="card-img-top w-100 h-50 mt-2"
                            alt="missing image">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $food->food_name }}</h5>
                        <p class="card-text">
                            {{ $food->food_name
                            . $food->food_prep_description
                            . $food->food_prep_time . " min "
                            . $food->food_prep_difficulty . " / 5 difficulty "
                            }}
                        </p>

                        <a href="foods/{{ $food->food_id }}" class="btn btn-primary">More details</a>
                        <a href="foods/{{ $food->food_id }}/edit" class="btn btn-primary">Modify</a>
                        <form action="foods/{{ $food->food_id }}" method="POST">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger" type="submit">Delete food</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <h2 class="mt-md-2">Add new ingredient</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="p-4 mx-auto" style="background-image: url({{ asset('images/test.jpg') }}); background-size:cover;">
        <form action="{{ URL('food-ingredients') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4 p-3">
                    <label for="name" class="form-label">Food name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Food name..."/>
                </div>
                <div class="col-md-4 p-3">
                    <label for="name" class="form-label">Calories:</label>
                    <input type="text" name="kcal" class="form-control" placeholder="Calories..."/>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 p-3">
                    <label for="name" class="form-label">Proteins:</label>
                    <input type="text" name="protein" class="form-control" placeholder="Proteins..."/>
                </div>
                <div class="col-md-4 p-3">
                    <label for="name" class="form-label">Carbs:</label>
                    <input type="text" name="carb"  class="form-control" placeholder="Carbs..."/>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 p-3">
                    <label for="name" class="form-label">Fats:</label>
                    <input type="text" name="fat" class="form-control" placeholder="Fats..."/>
                </div>
                <div class="col-md-4 p-3">
                    <label for="name" class="form-label">Weight:</label>
                    <input type="text" name="weight" class="form-control" placeholder="Weight..."/>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 p-3">
                    <label for="name" class="form-label">Unit:</label>
                    <input type="text" name="unit" class="form-control" placeholder="Unit..."/>
                </div>
                <div class="col-md-4 p-3">
                    <label for="name" class="form-label">Upload Image:</label>
                    <input type="file" name="image" class="form-control"/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h2>Add new ingredient</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ URL('food-ingredients') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" />
            <input type="text" name="kcal" />
            <input type="text" name="protein" />
            <input type="text" name="carb" />
            <input type="text" name="fat" />
            <input type="text" name="weight" />
            <input type="text" name="unit" />
            <input type="file" name="image" />

            <button type="submit">Submit</button>
        </form>
    </div>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boostrap 5</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    logo
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('food-ingredients') }}">Food ingredients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('foods') }}">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('diets') }}">Diets</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

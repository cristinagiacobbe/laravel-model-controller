<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies database</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

</body>
<section>
    <div class="container">
        <h1>Movies page</h1>
        <div class="row">
            @foreach($movies as $movie)

            <div class="col-4">
                <div class="card">
                    <h4>{{$movie['title']}}</h4>
                </div>
            </div>


            @endforeach
        </div>
    </div>
</section>





</html>
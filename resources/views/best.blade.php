@extends('layouts.app')

@section('content')



<div class="container">
    <h1>Best movies</h1>
    <div class="row">
        @foreach($best_movies as $movie)

        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="https://picsum.photos/400/200" alt="">
                <div class="card-body">
                    <h4>{{$movie['title']}}</h4>
                </div>

            </div>
        </div>


        @endforeach
    </div>
</div>


@endsection
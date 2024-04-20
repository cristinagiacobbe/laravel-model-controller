@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center m-5 ">
        <div class="col-4">
            <p class="text-center">{{$best_movies[0]->title}}</p>
            <img class="card-img-top" src="https://picsum.photos/400/200" alt="">
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-4">
            <p class="text-center">{{$best_movies[1]->title}}</p>
            <img class="card-img-top" src="https://picsum.photos/400/200" alt="">
        </div>
        <div class="col-4">
            <p class="text-center">{{$best_movies[2]->title}}</p>
            <img class="card-img-top" src="https://picsum.photos/400/200" alt="">
        </div>
    </div>
</div>




@endsection
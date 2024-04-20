@extends('layouts.app')

@section('content')

@section('pageTitle', 'Home page')


<div class="container">
    <div class="bar">
        <a href="{{route('best')}}"><button>Click here for most liked movies...</button></a>
        <h1>Movies page</h1>
        <a href="{{route('worst')}}"> <button>...and here for less liked</button></a>
    </div>
    <div class="row row-cols-4 ">
        @foreach($movies as $movie)

        <div class="col">
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
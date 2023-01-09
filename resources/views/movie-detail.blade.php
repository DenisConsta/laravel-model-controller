@extends('layouts.main')

@section('content')

    <section class="container">
        <h1> Title : {{$movie->title}} </h1>
        <h2> Original Title : {{$movie->original_title}} </h2>
        <h3> Nationality : {{$movie->nationality}} </h3>
        <h3> Date : {{$movie->date}} </h3>
        <h3> Vote : {{$movie->vote}} </h3>

        <a class="btn btn-primary" href="https://www.youtube.com/results?search_query={{$movie->title}}+trailer">Trailer</a>
    </section>

@endsection

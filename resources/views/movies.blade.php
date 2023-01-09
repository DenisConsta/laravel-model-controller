@extends('layouts.main')

@section('content')
    <ul>
        <div class="row row-cols-4 row-cols-lg-8">
            @foreach ($movies as $movie)
                <div class="col py-3">
                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
                            <h4 class="card-title"> {{ $movie->title }} </h4>
                            <h6>Date:  {{ $movie->date }} </h6>
                            <h6>Nationality : {{ $movie->nationality }} </h6>
                            <h6>Ranking:  {{ $movie->vote }} </h6>
                            <a href="{{route('movieDetail', $movie->id)}}" class="btn btn-primary">More info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection

@extends('layouts/main')

@section('title', 'Home')

@section('mainContent')
    @foreach ($movies as $movie)
        @include('includes.movie.card', $movie)
    @endforeach
@endsection
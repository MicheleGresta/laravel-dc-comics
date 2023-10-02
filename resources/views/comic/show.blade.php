
@extends('layouts.public')

@section('title', $comic->titolo . ' - Comic')

@section('content')
    <div class="container text-center py-5 d-flex gap-3">
        <img src="{{ $comic->image }}">
        <div class="box">
            <h1>{{ ucfirst($comic->title) }}</h1>
            <h2>{{ ucfirst($comic->type) }}</h2>
            <p>{{ $comic->price }} €</p>
            <p><strong>{{ $comic->series }}</strong></p>
            <p><strong>Artists:</strong> {{ join(", ", json_decode($comic->artists)) }}</p>
            <p><strong>Writers:</strong> {{ join(", ", json_decode($comic->writers)) }}</p>                     
            <p><strong>Descriptions: </strong>{{ $comic->description }}</p>
        </div>

    </div>
    <div class="container text-center">
        <a href={{ route('comic.index', ['id' => $comic->id]) }} class="btn btn-danger ">Back</a>
    </div>
@endsection

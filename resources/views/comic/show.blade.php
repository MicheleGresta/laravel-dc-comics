@extends('layouts.public')

@section('title', $comic->titolo . ' - Comic')

@section('content')
    <div class="container text-center py-5">
        <img src="{{ $comic->image }}">
        <h1>{{ ucfirst($comic->title) }}</h1>
        <h2>{{ ucfirst($comic->type) }}</h2>
        <p>{{ $comic->price }} €</p>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->artists }}</p>
        {{-- <p>Artisti:</p>
        <ul>
            @foreach ($comic->artists as $artist)
                <li>{{ $artist }}</li>
            @endforeach
        </ul> --}}
        <p>{{ $comic->description }}</p>
        <a href={{ route('comic.index', ['id' => $comic->id]) }} class="btn btn-danger">Indietro</a>
    </div>

@endsection

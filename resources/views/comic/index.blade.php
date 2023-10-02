@extends('layouts.public')

@section('title', 'Comic')

@section( "content")

<div class="bg-card-container">
    <div class="container">
        <div class="row text-center py-3">
            <a href="{{ route("comic.create")}}"><button class="btn btn-danger">
                Aggiungi fumetto
            </button></a>
        </div>
        <div class="row row-cols-6">
            @foreach ($comics as $comic)
                <div class="col py-3">
                    <div class="card card-settings d-flex flex-column gap-3">
                        <a href="{{ route('comic.show', $comic->id) }}"><img src="{{ $comic['image'] }}" alt=""></a>
                        <h5> {{ $comic['series'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection 

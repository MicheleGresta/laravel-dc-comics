@extends('layouts.public')

@section('title', "Create")

@section('content')
    
    <div class="container" style="background-color: rgb(73, 73, 252)">
        <div class="row text-center py-5">

            <form action="{{route("comic.store")}}" method="POST" class="d-flex flex-column gap-3">
            @csrf()
    
                <div>
                    <label>
                        <h4>Titolo</h4>
                    </label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label>
                        <h4>Descrizione</h4>
                    </label>
                    <input type="text" name="description">
                </div>
                <div>
                    <label>
                        <h4>Immagine</h4>
                    </label>
                    <input type="text" name="image">
                </div>
                <div>
                    <label>
                        <h4>Prezzo</h4>
                    </label>
                    <input type="text" name="price">
                </div>
                <div>
                    <label>
                        <h4>Serie</h4>
                    </label>
                    <input type="text" name="series">
                </div>
                <div>
                    <label>
                        <h4>Tipo</h4>
                    </label>
                    <input type="text" name="type">
                </div>
                <div>
                    <label>
                        <h4>Artisti</h4>
                    </label>
                    <input type="text" name="artists">
                </div>
                <div>
                    <label>
                        <h4>Scrittori</h4>
                    </label>
                    <input type="text" name="writers">
                </div>
    
                <a href=""><button class="btn btn-success">Aggiungi Fumetto</button></a>
                <a href="{{route("comic.index")}}"><button class="btn btn-danger">Torna alla Home</button></a>
            </form>
        </div>
    </div>

@endsection
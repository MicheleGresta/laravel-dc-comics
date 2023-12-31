@extends('layouts.public')

@section('title', 'Create')

@section('content')

    <div class="container" style="background-color: rgb(73, 73, 252)">
        <div class="row text-center py-5">

            <form action="{{ route('comic.store') }}" method="POST" class="d-flex flex-column gap-3">
                @csrf()
                <div class="row justify-content-center">
                    <div class="col-md-10 d-flex justify-content-center">
                        <label class="form-label">
                            <h4>Titolo</h4>
                        </label>
                        <div class="input-size">
                            <input type="text" class="form-control @error("title") is-invalid @enderror" name="title">
                            @error("title")
                                <div class="invalid-feedback">
                                    Inserire un Titolo
                                </div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-md-10 d-flex justify-content-center">
                        <label class="form-label">
                            <h4>Descrizione</h4>
                        </label>
                        <div class="input-size">
                            <input type="text" class="form-control @error("description") is-invalid @enderror" name="description">
                            @error("description")
                                <div class="invalid-feedback">
                                    Inserire una Descrizione
                                </div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-md-10 d-flex justify-content-center">
                        <label class="form-label">
                            <h4>Immagine</h4>
                        </label>
                        <div class="input-size">
                            <input type="text" class="form-control @error("image") is-invalid @enderror" name="image">
                            @error("image")
                                <div class="invalid-feedback">
                                    Inserire una Immagine
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-center">
                        <label class="form-label">
                            <h4>Prezzo</h4>
                        </label>
                        <div class="input-size">
                            <input type="text" class="form-control @error("price") is-invalid @enderror" name="price">
                            @error("price")
                                <div class="invalid-feedback">
                                    Inserire un Prezzo
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-center">
                        <label class="form-label">
                            <h4>Serie</h4>
                        </label>
                        <div class="input-size">
                            <input type="text" class="form-control @error("series") is-invalid @enderror" name="series">
                            @error("series")
                                <div class="invalid-feedback">
                                    Inserire una Serie
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-center">
                        <label class="form-label">
                            <h4>Tipologia</h4>
                        </label>
                        <div class="input-size">
                            <input type="text" class="form-control @error("type") is-invalid @enderror" name="type">
                            @error("type")
                                <div class="invalid-feedback">
                                    Inserire una Tipologia
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-center">
                        <label class="form-label">
                            <h4>Artisti</h4>
                        </label>
                        <div class="input-size">
                            <input type="text" class="form-control @error("artists") is-invalid @enderror" name="artists">
                            @error("artists")
                                <div class="invalid-feedback">
                                    Inserire gli Artisti
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-center">
                        <label class="form-label">
                            <h4>Scrittori</h4>
                        </label>
                        <div class="input-size">
                            <input type="text" class="form-control @error("writers") is-invalid @enderror" name="writers">
                            @error("writers")
                                <div class="invalid-feedback">
                                    Inserire gli Scrittori
                                </div>
                            @enderror

                        </div>
                    </div>


                </div>

                <a href=""><button class="btn btn-success">Aggiungi Fumetto</button></a>
                <a href="{{ route('comic.index') }}" class="btn btn-danger return-button">Torna alla Home</a>
            </form>
        </div>
    </div>

@endsection

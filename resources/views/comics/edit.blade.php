@extends('template.base')
@section('css', './css/app.css')
@section('main')
    <div>
        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" class="row g-3" method="post">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input class="form-control" placeholder="Aggiorna Titolo" id="title" name="title"
                        value="{{ $comic->title }}">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" placeholder="Aggiorna Image Url" id="image" name="thumb"
                        value="{{ $comic->thumb }}">
                </div>
                <div class="col-auto">
                    <label for="description" class="form-label">Description</label>
                    <input id="description" placeholder="Aggiorna Descrizione" name="description"
                        value="{{ $comic->description }}" style="height: 50px">
                </div>
                <div class="col-auto">
                    <div class="form-check">
                        <input type="date" placeholder="Aggiorna Data" name="sale_date" id="sale_date"
                            value="{{ $comic->sale_date }}">
                        <label class="form-check-label" for="sale_date">
                            Data di vendita
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="type" class="form-label">Cambia tipologia</label>
                    <input type="type" placeholder="Update Type" name="type" id="type" value="{{ $comic->type }}">
                </div>
                <div class="col-md-4">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" placeholder="Aggiorna
                                                                Prezzo" name="price" id="price"
                        value="{{ $comic->price }}">
                </div>
                <div class="col-md-4">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" placeholder="Aggiorna Series" name="series" id="series"
                        value="{{ $comic->series }}">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
            {{-- <h1><a href="{{ route('home') }}">Edit this Comic</a></h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-floating">
                <input class="form-control" placeholder="Aggiorna Titolo" id="floatingTextarea" name="title"
                    value="{{ $comic->title }}">
            </div>
            <div class="form-floating">

            </div>
            <div class="form-floating">

            </div>
            <div class="form-floating">

            </div>
            <div class="form-floating">

            </div>
            <div class="form-floating">

            </div>
            <div class="form-floating">
            </div>
            <button type="submit">Edit</button>
        </form> --}}
        </div>
    </div>
@endsection

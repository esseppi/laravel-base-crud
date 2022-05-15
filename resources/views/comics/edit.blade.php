@extends('template.base')
@section('css', './css/app.css')
@section('main')
    <div>
        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" class="row g-3" method="post">
                @csrf
                @method('PUT')

                <div class="col-12">
                    <div class="col-6 m-auto">
                        <label for="title" class="form-label">Titolo</label>
                        <input class="form-control" placeholder="Aggiorna Titolo" id="title" name="title"
                            value="{{ $comic->title }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6 m-auto">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" placeholder="Aggiorna Image Url" id="image" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6 m-auto">
                        <label for="description" class="form-label">Description</label>
                        <input class="form-control" id="description" placeholder="Aggiorna Descrizione" name="description"
                            value="{{ $comic->description }}" style="height: 50px">
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6 m-auto">
                        <label class="form-check-label" for="sale_date">Data di vendita</label>
                        <input class="form-control" type="date" placeholder="Aggiorna Data" name="sale_date"
                            id="sale_date" value="{{ $comic->sale_date }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6 m-auto">
                        <label for="type" class="form-label">Cambia tipologia</label>
                        <input class="form-control" type="type" placeholder="Update Type" name="type" id="type"
                            value="{{ $comic->type }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6 m-auto">
                        <label for="price" class="form-label">Prezzo</label>
                        <input class="form-control" type="text" placeholder="Aggiorna Prezzo" name="price" id="price"
                            value="{{ $comic->price }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6 m-auto">
                        <label for="series" class="form-label">Series</label>
                        <input class="form-control" type="text" placeholder="Aggiorna Series" name="series" id="series"
                            value="{{ $comic->series }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6 m-auto">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
@endsection

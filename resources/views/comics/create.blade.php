@extends('template.base')
@section('css', './css/app.css')
@section('main')
    <div>
        <div class="container">
            <h1>Add a Comic</h1>
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Titolo" id="floatingTextarea" name="title"></textarea>
                    <label for="floatingTextarea">Titolo</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Titolo" id="floatingTextarea" name="thumb"></textarea>
                    <label for="floatingTextarea">Image Url</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Descrizione" id="floatingTextarea2" name="description"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Descrizione</label>
                </div>
                <div class="form-floating">
                    <input type="text" placeholder="Prezzo" name="price" id="price">
                </div>
                <div class="form-floating">
                    <input type="text" placeholder="Series" name="series" id="series">
                </div>
                <div class="form-floating">
                    <input type="date" placeholder="Prezzo" name="sale_date" id="sale_date">
                </div>
                <div class="form-floating">
                    <input type="type" placeholder="Type" name="type" id="type">
                </div>


                <button type="submit">Add Comic</button>
            </form>
        </div>
    </div>
@endsection

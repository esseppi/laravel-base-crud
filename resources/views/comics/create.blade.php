@extends('template.base')
@section('css', './css/app.css')
@section('main')
    <div class="container">
        <h1>Add a Comic</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="form-floating">
                <textarea class="form-control" placeholder="Titolo" id="floatingTextarea" name="title"></textarea>
                <label for="floatingTextarea">Titolo</label>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-outline">
                <input type="url" id="typeURL" name="thumb" placeholder="Url image" class="form-control" />
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-outline">
                <textarea class="form-control" placeholder="Descrizione" id="floatingTextarea2" name="description"
                    style="height: 100px" rows="4"></textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating">
                <input type="number" placeholder="Prezzo" name="price" id="price">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" placeholder="Series" name="series" id="series">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="date" placeholder="sale date" name="sale_date" id="sale_date">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="type" placeholder="Type" name="type" id="type">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit">Add Comic</button>
        </form>
    </div>
@endsection

@extends('template.base')
@section('css', './css/app.css')
@section('main')
    <main class="my-3">
        <div class="container">
            <div class="row row-cols-5">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>
                                <p class="card-text">{{ $comic['price'] }}</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Info</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">dlt</button>
                                </form>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Edit</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

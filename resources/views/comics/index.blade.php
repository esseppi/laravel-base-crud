@extends('template.base')
@section('css', './css/app.css')
@section('main')
<main>
    <div class="container">
        <div class="row row-cols-5">
            @foreach ($comics as $comic)
            <div class="col">
                <div class="card">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic['title']}}</h5>
                      <p class="card-text">{{$comic['price']}}</p>
                      <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Info</a>
                    </div>
                  </div>
            </div>
            @endforeach

        </div>
    </div>
</main>
@endsection
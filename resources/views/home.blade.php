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
                    </div>
                    <div>
                      <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Info</a>
                    </div>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">dlt</button>
                  </form>
                </div>
            </div>
            @endforeach
        </div>
        {{ $comics->links() }}
     </div>
</main>
@endsection
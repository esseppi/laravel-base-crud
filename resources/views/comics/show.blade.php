@extends('template.base')
@section('css', './css/app.css')
@section('main')
<div class="container">
    <div class="row g-4">
        <div class="col-8">
            <img src="{{$comic->thumb}}" class="rounded float-start" alt="{{ $comic->title }}">
            <h2>{{ $comic->title }}</h2>
            <p>{{ $comic->description }}</p>
        </div>
    </div>
</div>
@endsection

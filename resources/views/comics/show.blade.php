@extends('template.base')
@section('css', './css/app.css')
@section('main')
    <div class="container">
        <div class="row g-4 m-auto">
            <div class="col-8 m-auto">
                <div class="m-auto d-flex flex-column justify-center">
                    <div class="m-auto">
                        <img src="{{ $comic->thumb }}" class="rounded img-fluid" alt="{{ $comic->title }}">
                    </div>
                    <div>
                        <h2>{{ $comic->title }}</h2>
                        <p>{{ $comic->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}">Back</a>
    </div>
@endsection

<script src=//code.jquery.com/jquery-3.5.1.slim.min.js integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
crossorigin=anonymous></script>
<script>
    $('.addAttr').click(function() {
        var id = $(this).data('id');
        $('#id').val(id);
    });
</script>
@extends('template.base')
@section('css', './css/app.css')
@section('main')
    <main class="my-3">
        <div class="container">
            <div class="row row-cols-5">
                @foreach ($comics as $comic)
                    <div class="card-group">
                        <div class="card my-3">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>
                                <p class="card-text">{{ $comic['price'] }}</p>
                            </div>
                            <div class="d-flex justify-content-around mb-2">
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Info</a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Edit</a>
                                {{-- trigger delete button --}}
                                <button type="button" class="btn btn-danger deleteButton" data-bs-toggle="modal"
                                    data-base="{{ route('comics.index') }}" data-id="{{ $comic->id }}"
                                    data-bs-target="#staticBackdrop">
                                    Delete
                                </button>
                                {{-- invisible delete popup --}}
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Do you want delete this
                                                    file?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                This action is irreversible!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                {{-- action="{{ route('comics.destroy', $comic->id) }}" --}}
                                                <form method="POST" class="deleteForm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $comics->links() }}
            </div>
        </div>
    </main>
@endsection

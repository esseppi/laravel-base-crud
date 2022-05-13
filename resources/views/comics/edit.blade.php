<div>
    <div class="container">
        <h1><a href="{{ route('home') }}">Edit this Comic</a></h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-floating">
                <input class="form-control" placeholder="Aggiorna Titolo" id="floatingTextarea" name="title"
                    value="{{ $comic->title }}">
            </div>
            <div class="form-floating">
                <input class="form-control" placeholder="Aggiorna Image Url" id="floatingTextarea" name="thumb"
                    value="{{ $comic->thumb }}">
                < <label for="floatingTextarea"></label>
            </div>
            <div class="form-floating">
                <input class="" placeholder="Aggiorna Descrizione" name="description"
                    value="{{ $comic->description }}" style="height: 100px">
                < <label for="floatingTextarea2"></label>
            </div>
            <div class="form-floating">
                <input type="text" placeholder="Aggiorna
                Prezzo" name="price" id="price" value="{{ $comic->price }}">
            </div>
            <div class="form-floating">
                <input type="text" placeholder="Aggiorna Series" name="series" id="series"
                    value="{{ $comic->series }}">
            </div>
            <div class="form-floating">
                <input type="date" placeholder="Aggiorna Data" name="sale_date" id="sale_date"
                    value="{{ $comic->sale_date }}">
            </div>
            <div class="form-floating">
                <input type="type" placeholder="Update Type" name="type" id="type" value="{{ $comic->type }}">
            </div>
            <button type="submit">Edit</button>
        </form>
    </div>
</div>

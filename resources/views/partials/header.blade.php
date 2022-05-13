<header>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ route('home') }}" class="navbar-brand">COMICS</a>
            <div class="d-flex">
                <div class="mr-2">
                    <a href="{{ route('comics.create') }}" class="btn btn-info text-nowrap mr-2">Add a Comic</a>
                </div>
                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>

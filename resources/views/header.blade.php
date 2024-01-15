<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('blogs.create') }}">Add Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('blogs.index') }}">Manage Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('categories.create') }}">Add Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('categories.index') }}">View Categories</a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            @if(Auth::check())
                <a class="nav-link" href="/images">Images</a>
            @endif

            @if(Auth::check())
                <a class="nav-link btn btn-primary ml-auto" href="/logout">Logout</a>
            @else
                <div class="nav-link btn-group ml-auto" role="group" aria-label="Basic example">
                    <a class="btn btn-secondary" href="/register">Register</a>
                    <a class="btn btn-secondary" href="/login">Login</a>
                </div>
            @endif

        </nav>
    </div>
</div>

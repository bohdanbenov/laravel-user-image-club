<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#">About</a>

            @if(Auth::check())
                <a class="btn btn-primary ml-auto" href="/logout">Logout</a>
            @else
                <a class="btn btn-primary ml-auto" href="/register">Register</a>
                <a class="btn btn-primary ml-auto" href="/login">Login</a>
            @endif

        </nav>
    </div>
</div>

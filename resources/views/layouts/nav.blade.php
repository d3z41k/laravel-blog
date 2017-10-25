<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="#">About</a>
            @if (Auth::check())
                <a class="nav-link ml-auto" href="/logout">Logout ({{ Auth::user()->name }})</a>
            @else
                <a class="nav-link ml-auto" href="/login">Login</a>
                <a class="nav-link" href="/register">Register</a>
            @endif

        </nav>
    </div>
</div>

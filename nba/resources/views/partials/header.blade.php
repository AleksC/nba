<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link  ml-auto" href="/">Home</a>
        </li>
        @if(auth()->check())
        <a class="nav-link " href="#">{{ auth()->user()->name }}</a>
        <a class="nav-link " href="/logout">Logout</a>
        @else
        <a class="nav-link ml-auto" href="/login">Login</a>
        <a class="nav-link" href="/register">Register</a>
        @endif
    </ul>
</nav>
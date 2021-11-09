<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'post' ? 'active' : '' }}" aria-current="page" href="{{ url('/post') }}">Content Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'user' ? 'active' : '' }}" href="{{ url('/user') }}">User List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::segment(1) == 'comment' ? 'active' : '' }}" href="{{ url('/comment') }}">Comment Guest</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

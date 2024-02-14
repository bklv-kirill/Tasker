<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Main</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is("tasks*") ? "active" : "" }}" aria-current="page" href="{{ route("tasks.index") }}">
                        @if (Auth::user()->is_admin)
                            All Tasks
                        @else
                            My Tasks
                        @endif
                    </a>
                </li>
            </ul>
            <span class="navbar-text">
                {{ Auth::user()->login }}
            </span>
            <a class="nav-link ms-1" href="{{ route("users.logout") }}"> Log Out</a>
        </div>
    </div>
</nav>
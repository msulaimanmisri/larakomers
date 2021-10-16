<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard.index') }}">LaraKomers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/dashboard') ? 'active text-warning' : '' }}"
                        href="{{ route('admin.dashboard.index') }}">{{
                        ucwords('dashboard') }}</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
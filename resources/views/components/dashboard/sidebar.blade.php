<nav class="sidebar">
    <div class="sidebar-header">
        @include('components.dashboard.sidebar-head')
    </div>

    <div class="sidebar-body ps ps--active-y">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                    <i class="bi bi-box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
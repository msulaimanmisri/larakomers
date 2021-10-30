<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard.index') }}">LaraKomers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                {{-- Dashboard --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/dashboard') ? 'active text-warning' : '' }}"
                        href="{{ route('admin.dashboard.index') }}">{{
                        ucwords('dashboard') }}</a>
                </li>

                {{-- Product --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        class="{{ request()->is('admin/products') ? 'active' : '' }} ">
                        {{ ucwords('product') }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('admin.products.index') }}">{{ ucwords('overview')
                                }}</a>
                        </li>

                        <li><a class="dropdown-item" href="{{ route('admin.products.create') }}">{{ ucwords('create
                                new') }}</a>
                        </li>

                        <li><a class="dropdown-item" href="{{ route('admin.product-category.index') }}">{{
                                ucwords('category') }}</a>
                        </li>
                    </ul>
                </li>

                {{-- Orders --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/order*') ? 'active text-warning' : '' }}"
                        href="{{ route('admin.order.index') }}">{{
                        ucwords('orders') }}</a>
                </li>

                {{-- Customer --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/customer') ? 'active text-warning' : '' }}"
                        href="{{ route('admin.customer.index') }}">{{
                        ucwords('customer') }}</a>
                </li>

                {{-- Slider --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/slider*') ? 'active text-warning' : '' }}"
                        href="{{ route('admin.slider.index') }}">{{
                        ucwords('slider') }}</a>
                </li>

                {{-- Profile --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/profile') ? 'active text-warning' : '' }}"
                        href="{{ route('admin.profile.index') }}">{{
                        ucwords('profile') }}</a>
                </li>

                {{-- Users --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/users') ? 'active text-warning' : '' }}" href="">{{
                        ucwords('users') }}</a>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav">
            <div class="d-flex justify-content-end">
                <li class="nav-item">

                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ ucwords('logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </div>
        </ul>

    </div>
</nav>
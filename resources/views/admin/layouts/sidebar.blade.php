<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <h4 class="sidebar-brand-text mx-2 font-weight-bold">X-Mobile</h4>
    </a>

    <hr class="sidebar-divider my-0" />
    <li class="nav-item">
        <a class="nav-link" href="{{ route('client.products.index') }}">
            <i class="fas fa-home-heart"></i>
            <span>Home</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0" />
    <li class="nav-item {{ request()->routeIs('roles.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
            <i class="fas fa-shield-check"></i>
            <span>Role</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0" />
    <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0" />
    <li class="nav-item {{ request()->routeIs('products.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('products.index') }}">
            <i class="fas fa-phone-laptop"></i>
            <span>Product</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0" />
    <li class="nav-item {{ request()->routeIs('categories.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Category</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0" />
    <li class="nav-item">
        <a class="nav-link btn-logout" href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Đăng Xuất</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </li>

    <hr class="sidebar-divider d-none d-md-block" />
</ul>
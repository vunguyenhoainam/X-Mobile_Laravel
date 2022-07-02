<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
        <i class="fal fa-smile-beam"></i>
        </div>
        <div class="sidebar-brand-text mx-2">X-Mobile</div>
    </a>
    
    <hr class="sidebar-divider my-0" />

    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Danh Sách Sản Phẩm</span>
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

    <li class="nav-item">
        <a class="nav-link" href="proceeds.html">
        <i class="fas fa-fw fa-calculator"></i>
        <span>Thống kê doanh thu</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0" />

    <li class="nav-item">
        <a class="nav-link" href="manageImportProducts.html">
        <i class="fas fa-fw fa-warehouse-alt"></i>
        <span>Quản Lý Nhập Kho</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0" />

    <li class="nav-item">
        <a class="nav-link" href="manageExportProducts.html">
        <i class="fa fa-truck" aria-hidden="true"></i>
        <span>Quản Lý Xuất Kho</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0" />

    <li class="nav-item">
        <a class="nav-link btn-logout" href="#">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Đăng Xuất</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block" />
</ul>
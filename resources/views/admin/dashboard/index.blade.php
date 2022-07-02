@extends('admin.layouts.app')

@section('content')
    <div id="content">
        <nav
        class="
            navbar navbar-expand navbar-light
            bg-white
            topbar
            mb-4
            static-top
            shadow
        "
        >
        <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
            <a
                class="nav-link dropdown-toggle"
                href="#"
                id="alertsDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            >
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">9+</span>
            </a>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
            <a
                class="nav-link dropdown-toggle"
                href="#"
                id="messagesDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            >
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">2</span>
            </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
            <a
                class="nav-link dropdown-toggle"
                href="#"
                id="userDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            >
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                >admin@gmail.com</span
                >
                <img
                class="img-profile rounded-circle"
                src="{{ asset('admin/assets/images/admin.png') }}"
                />
            </a>
            </li>
        </ul>
        </nav>

        <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Danh sách sản phẩm
            </h4>
            <div class="input-search">
                <span>Tìm kiếm</span>
                <input
                class="search"
                type="text"
                placeholder="Tìm kiếm sản phẩm"
                spellcheck="false"
                />
                <i class="fas fa-search btn-search" title="Tìm kiếm"></i>
                <i
                class="far fa-times-circle btn-close-search"
                title="Xoá"
                ></i>
            </div>
            <div class="input-sort">
                <span>Lọc theo giá</span>
                <select class="sort">
                <option value="0">Mặc định</option>
                <option value="1">1 -> 5 triệu</option>
                <option value="2">5 -> 10 triệu</option>
                <option value="3">10 -> 15 triệu</option>
                <option value="4">15 triệu trở lên</option>
                </select>
            </div>
            <a href="#" class="btn-addProduct" onclick="postProducts()"
                ><i
                class="fas fa-fw fa-plus-square"
                style="margin-right: 5px"
                ></i
                >Thêm sản phẩm</a
            >
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table
                class="table table-bordered"
                id="dataTable"
                width="100%"
                cellspacing="0"
                >
                <thead>
                    <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Thương hiệu</th>
                    <th>Giá sản phẩm</th>
                    <th>Giảm giá</th>
                    <th>Số lượng</th>
                    <th>Ảnh</th>
                    <th>Mô tả</th>
                    <th>Cập nhật</th>
                    <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="product-element"></tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
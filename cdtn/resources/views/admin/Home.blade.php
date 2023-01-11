<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/message.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/customer_popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/customerlist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/contenthome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/productlist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/success.css') }}">
</head>

<body>
    <div class="home-wrapper">
        <div class="m-navbar">
            <div class="navbar-avatar d-flex justify-content-center">
                <div class="w-30 d-flex justify-content-center">
                    <img src="{{ asset('assets/icons/avatar.jpg') }}" class="w-100"
                        style="min-height: 50px;border-radius:50%" alt="">
                </div>
            </div>

            <div class="navbar-username pt-4 w-100 d-flex justify-content-center">
                @auth
                    {{ auth()->user()->username }}
                @endauth
            </div>

            <div class="navbar-menu">
                <a href="{{ route('adminHome') }}" class="item-link">
                    <div class="navbar-item nav-report">
                        <div class="navbar-item-content">Trang chủ</div>
                    </div>
                </a>
                <a href="{{ route('manageUser') }}" class="item-link">
                    <div class="navbar-item nav-report">
                        <div class="navbar-item-content">Quản lý khách hàng
                        </div>
                    </div>
                </a>
                <a class="item-link sub-btn sub-menu">
                    <div class="navbar-item nav-report d-flex align-items-center">
                        <div class="navbar-item-content">Quản lý sản phẩm
                        </div>
                        <div class="arrow-right mi-16 mb-1"></div>
                    </div>
                    <div class="navbar-menu-child">
                        <div class="sub-menu">
                            <a href="{{ route('manageProductsbyID', 1) }}" class="sub-item"><div>Quản lý Iphone</div></a>
                            <a href="{{ route('manageProductsbyID', 2) }}" class="sub-item"><div>Quản lý Ipad</div></a>
                            <a href="{{ route('manageProductsbyID', 3) }}" class="sub-item"><div>Quản lý Airpods</div></a>
                            <a href="{{ route('manageProductsbyID', 4) }}" class="sub-item"><div>Quản lý phụ kiện</div></a>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="navbar-item nav-report">
                        <div class="navbar-item-content">
                            {{-- <form action="/logout" class="logoutForm" method="get">
                                @csrf
                                <div id="btnLogout">Đăng xuất
                                </div>
                            </form> --}}

                            <form id="logoutAdmin" method="get">
                                @csrf
                                <div>Đăng xuất</div>
                            </form>

                        </div>
                    </div>
                </a>
            </div>
        </div>

        @include('admin.ContentHome')
        @include('components.TheMessage')
        @yield('admin_content')
        @include('admin.CustomerPopup')
        @include('admin.Products.ProductsPopupAdd')
        @include('admin.Products.ProductPopupEdit')
        @include('components.TheSuccess')
    </div>

    <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('js/Admin/admin.js') }}"></script>
    <script src="{{ asset('js/Admin/products.js') }}"></script>
    <script src="{{ asset('js/Admin/select.js') }}"></script>
</body>

</html>

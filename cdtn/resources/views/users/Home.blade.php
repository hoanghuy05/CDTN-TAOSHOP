<title>@yield('title')</title>

<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/users/home.css') }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/users/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/users/register.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/users/newfeed.css') }}">
<link rel="stylesheet" href="{{ asset('css/users/phonepage.css') }}">
<link rel="stylesheet" href="{{ asset('css/users/order.css') }}">
<link rel="stylesheet" href="{{ asset('css/users/ipadpage.css') }}">
<link rel="stylesheet" href="{{ asset('css/users/installment.css') }}">

<div class="m-home">
    @include('users.Login')
    @include('users.Register')
    {{-- Nếu có thông báo đăng kí thành công thì hiển thị --}}
    {{-- @if (session()->has('RegisterSuccess'))
        <div class="m-toast-box">
            <div class="m-toast d-flex align-items-center w-100 h-100">
                <div class="mi-ce mi-16 mi-checkdone"></div>
                <div class="toast-content ps-3">{{ session()->get('RegisterSuccess') }} @php
                    Session::forget('RegisterSuccess');
                @endphp</div>
            </div>
        </div>
    @endif --}}
    @include('components.TheHeader')
    @include('users.ContentHome')
    {{-- @include('users.Accessories') --}}
    {{-- @include('users.Product_Detail') --}}
    {{-- @include('users.OrderCheck') --}}
    {{-- @include('users.Profile') --}}
    {{-- @include('users.Order') --}}
    {{-- @include('users.Introduce') --}}
    {{-- @include('users.OrderSuccess') --}}

    {{-- @include('users.IpadPage') --}}
    {{-- @include('users.WarrantyPolicy') --}}
    @yield('content')
    @yield('popup')

    @include('components.TheFooter')


    <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('js/Users/home.js') }}"></script>
</div>

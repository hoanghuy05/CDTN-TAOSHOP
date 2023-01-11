<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hồ sơ khách hàng</title>
    <link rel="stylesheet" href="{{ asset('css/users/profile.css') }}">
</head>

<body>
    @extends('users.Home')
    @section('content')
        <div class="m-profile-wrapper">
            <div class="m-profile-container d-flex">
                <div class="m-profile-left">
                    <div class="d-flex  align-items-center font-weigth-700 fs-3">
                        <div class="m-profile-avatar me-3">
                            <img src="{{ asset('assets/icons/users.jpg') }}" alt="">
                        </div>
                        <div>User</div>
                    </div>
                    <ul class="m-profile-list mt-4">
                        <li class="m-profile-item d-flex align-items-center mb-3">
                            <div class="m-profile-item-icon me-3 ">
                                <div class="mi-24">
                                    <img src="{{ asset('assets/images/admin.jpg') }}" class="w-100 h-100" alt="">
                                </div>
                            </div>
                            <div class="m-profile-item-text pt-2"><a href="{{ route('profile') }}">Thông tin tài khoản</a>
                            </div>
                        </li>
                        <li class="m-profile-item d-flex ">
                            <div class="m-profile-item-icon me-3 mb-3">
                                <div class="mi-24">
                                </div>
                            </div>
                            <div class="m-profile-item-text"><a href="">Ngân hàng</a></div>
                        </li>
                        <li class="m-profile-item d-flex">
                            <div class="m-profile-item-icon me-3 mb-3">
                                <div class="mi-24">
                                </div>
                            </div>
                            <div class="m-profile-item-text"><a href="">Địa chỉ</a></div>
                        </li>
                        <li class="m-profile-item d-flex">
                            <div class="m-profile-item-icon me-3 mb-3">
                                <div class="mi-24">
                                </div>
                            </div>
                            <div class="m-profile-item-text"><a href="{{ route('change_password') }}">Đổi mật khẩu</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="m-profile-right flex-1">
                    @include('users.AccountInfomation')
                    @yield('profile')
                    {{-- @include('users.ChangePassword') --}}
                </div>
            </div>
        </div>
    @endsection
</body>

</html>

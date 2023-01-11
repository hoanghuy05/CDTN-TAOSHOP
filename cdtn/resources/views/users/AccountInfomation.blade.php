<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin tài khoản user</title>
</head>

<body>
    @section('profile')
        <div class="m-account-info-wrapper">
            <div class="profile-right-title">
                <div class="text-color-black font-weigth-600 font-size-20">Hồ sơ</div>
                <div>Quản lý thông tin bảo mật</div>
            </div>
            <div class="profile-right-main mt-4">

                <div class="profile-item d-flex">
                    <div class="profile-text w-25">Tên:</div>
                    <div class="profile-input flex-1">
                        <input type="text" class="ms-input w-75" value="@auth {{ auth()->user()->username }} @endauth">
                    </div>
                </div>
                <div class="profile-item d-flex">
                    <div class="profile-text w-25">Email:</div>
                    <div class="profile-input flex-1">
                        <input type="text" class="ms-input w-75" value="@auth {{ auth()->user()->email }} @endauth">
                    </div>
                </div>
                <div class="profile-item d-flex">
                    <div class="profile-text w-25">Địa chỉ:</div>
                    <div class="profile-input flex-1">
                        <input type="text" class="ms-input w-75" value="@auth {{ auth()->user()->address }} @endauth">
                    </div>
                </div>
                <div class="profile-item d-flex">
                    <div class="profile-text w-25">Số điện thoại:</div>
                    <div class="profile-input flex-1">
                        <input type="text" class="ms-input w-75"
                            value="@auth {{ auth()->user()->phone_number }} @endauth">
                    </div>
                </div>
                <div class="profile-item d-flex">
                    <div class="profile-text w-25">Giới tính:</div>
                    <div class="profile-input flex-1 align-items-center d-flex">
                        <div class="d-flex align-items-center me-5">
                            <input type="radio" name="gender" class="ms-radio me-2" checked value="1">Nam
                        </div>
                        <div class="d-flex align-items-center me-5">
                            <input type="radio" name="gender" class="ms-radio me-2" value="0">Nữ
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="radio" name="gender" class="ms-radio me-2" value="2">Khác
                        </div>
                    </div>
                </div>
                <div class="profile-item d-flex justify-content-center">
                    <button class="btn btn-primary pt-2 pb-2 ps-5 pe-5">Lưu</button>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>

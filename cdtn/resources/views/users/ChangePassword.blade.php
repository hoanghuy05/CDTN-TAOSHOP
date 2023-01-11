<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đổi mật khẩu</title>
</head>

<body>
    @extends('users.Profile')
    @section('profile')
        <div class="m-account-info-wrapper">
            <div class="profile-right-title">
                <div class="text-color-black font-weigth-600 font-size-20">Đổi mật khẩu</div>
                <div>Không chia sẻ mật khẩu cho bất kì ai</div>
            </div>
            <div class="profile-right-main mt-4">
                <div class="profile-item d-flex ">
                    <div class="profile-text w-25">Mật khẩu cũ:</div>
                    <div class="profile-input flex-1">
                        <input type="password" class="ms-input w-75" value="muongthanh">
                    </div>
                </div>
                <div class="profile-item d-flex">
                    <div class="profile-text w-25">Mật khẩu mới:</div>
                    <div class="profile-input flex-1">
                        <input type="password" class="ms-input w-75" value="muongthanh">
                    </div>
                </div>
                <div class="profile-item d-flex mb-5">
                    <div class="profile-text w-25">Xác nhận mật khẩu:</div>
                    <div class="profile-input flex-1">
                        <input type="password" class="ms-input w-75" value="muongthanh">
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

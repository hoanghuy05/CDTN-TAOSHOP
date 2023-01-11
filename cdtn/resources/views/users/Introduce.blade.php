<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="{{ asset('css/users/introduce.css') }}">
</head>

<body>
    @extends('users.Home')
    @section('content')
        <div class="m-introduce">
            <div class="m-introduce-header w-100 d-flex justify-content-center align-items-center">
                <div class="introduce-header align-items-center w-60 d-flex flex-column justify-content-center">
                    <div class="w-50 d-flex justify-content-center ">
                        <div class="introduce-header-image w-100 d-flex justify-content-center">
                            <img src="{{ asset('assets/images/logo_white.png') }}" alt="">
                        </div>
                    </div>
                    <div class="w-75">HESMAN Group là đơn vị số 1 tạo nên những trải nghiệm tuyệt vời cho quá trình mua
                        sắm sản phẩm công
                        nghệ tại Việt Nam. Chúng tôi là đối tác ủy quyền tin cậy của các hãng công nghệ uy tín hàng đầu trên
                        thế giới như Apple, Samsung trong lĩnh vực thương mại và dịch vụ. Điều tuyệt vời nhất ở HESMAN chính
                        là, khi chúng ta trở thành đồng nghiệp, đối tác hay khách hàng của nhau, chúng ta đã trở thành người
                        một nhà. Ở mỗi điểm chạm, chúng ta luôn kết nối, bàn bạc và trao đổi để cùng thống nhất mục tiêu
                        chung, bởi chúng ta không có khoảng cách.</div>
                </div>
            </div>
            <div class="m-introduce-main w-100 d-flex justify-content-center mt-5">
                <div class="w-60 d-flex flex-row justify-content-center align-items-center">
                    <div class="introduce-main-item flex-1">
                        <div class="introduce-main-year w-100 d-flex justify-content-center">
                            <div class="fs-3 font-weigth-700">2010</div>
                        </div>
                        <div class="introduce-main-content d-flex w-100 justify-content-center">
                            <div class="w-60">Táo Shop được thành lập với của hàng đầu tiên tại Phùng Khoang,
                                chuyên bán thiết bị Apple</div>
                        </div>
                    </div>
                    <div class="h-100 pt-2" style="width:30px">
                        <img src="{{ asset('assets/icons/right.jpg') }}" class="w-100" alt="">
                    </div>
                    <div class="introduce-main-item flex-1">
                        <div class="introduce-main-year w-100 d-flex justify-content-center">
                            <div class="fs-3 font-weigth-700">2016</div>
                        </div>
                        <div class="introduce-main-content d-flex w-100 justify-content-center">
                            <div class="w-60">HESMAN Group mua lại thương hiệu Táo Shop với khởi điểm là một shop duy nhất
                                tại Phùng Khoang</div>
                        </div>
                    </div>
                    <div class="h-100 pt-2" style="width:30px">
                        <img src="{{ asset('assets/icons/right.jpg') }}" class="w-100" alt="">
                    </div>
                    <div class="introduce-main-item flex-1">
                        <div class="introduce-main-year w-100 d-flex justify-content-center">
                            <div class="fs-3 font-weigth-700">2020</div>
                        </div>
                        <div class="introduce-main-content d-flex w-100 justify-content-center">
                            <div class="w-60">HESMAN trở thành nhà bán lẻ ủy quyền của Aplle, với chuỗi 12 stores trên 6
                                tỉnh thành, với chất lượng sản phẩm và dịch vụ đạt chuẩn toàn cầu
                            </div>
                        </div>
                    </div>
                    <div class="h-100 pt-2" style="width:30px">
                        <img src="{{ asset('assets/icons/right.jpg') }}" class="w-100" alt="">
                    </div>
                    <div class="introduce-main-item flex-1">
                        <div class="introduce-main-year w-100 d-flex justify-content-center">
                            <div class="fs-3 font-weigth-700">2022</div>
                        </div>
                        <div class="introduce-main-content d-flex w-100 justify-content-center">
                            <div class="w-60">HESMAN Group tiếp tục phát triển mạnh mẽ với 40 stores phủ khắp 12 tỉnh
                                thành trên toàn quốc, trong đó có 11 Mono Stores</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-introduce-footer w-100 d-flex justify-content-center">
                <div class="w-50">
                    <div class="introduce-footer-title ps-5 fs-3 font-weigth-700 text-center mt-5">Tầm nhìn, sứ mệnh & định
                        hướng
                        phát triển
                    </div>
                    <div class="mt-4">
                        <ul style="list-style-type:disc">
                            <li>Tầm nhìn tương lai, HESMAN Group sẽ là đơn vị tiên phong số 1 trong lĩnh vực cung cấp các
                                sản phẩm công nghệ cao cấp mới nhất tới tay người tiêu dùng Việt Nam. Nâng cao giá trị trải
                                nghiệm mua sắm cho khách hàng từ những nhu cầu nhỏ nhất với hệ thống stores rộng khắp trên
                                toàn quốc
                            </li>
                            <li class="mt-2">Tầm nhìn tương lai, HESMAN Group sẽ là đơn vị tiên phong số 1 trong lĩnh vực
                                cung cấp các
                                sản phẩm công nghệ cao cấp mới nhất tới tay người tiêu dùng Việt Nam. Nâng cao giá trị trải
                                nghiệm mua sắm cho khách hàng từ những nhu cầu nhỏ nhất với hệ thống stores rộng khắp trên
                                toàn quốc
                            </li>
                            <li class="mt-2 mb-5">Tầm nhìn tương lai, HESMAN Group sẽ là đơn vị tiên phong số 1 trong lĩnh
                                vực
                                cung cấp các
                                sản phẩm công nghệ cao cấp mới nhất tới tay người tiêu dùng Việt Nam. Nâng cao giá trị trải
                                nghiệm mua sắm cho khách hàng từ những nhu cầu nhỏ nhất với hệ thống stores rộng khắp trên
                                toàn quốc
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>

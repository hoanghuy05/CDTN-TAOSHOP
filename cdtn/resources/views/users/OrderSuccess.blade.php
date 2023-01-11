<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đặt hàng thành công</title>
    <link rel="stylesheet" href="{{ asset('css/users/ordersucces.css') }}">
</head>

<body>
    <div class="order-success-wrapper d-flex w-100 justify-content-center pt-4" style="background: #ffffff">
        <div class="order-success-container w-75 d-flex flex-row justify-content-center">
            <div class="order-success-left w-70 font-size-18">
                <div class="w-100 d-flex justify-content-center">
                    <div class="w-25 d-flex justify-content-center">
                        <img src="{{ asset('assets/images/succes.jpg') }}" class="w-25" sytle="height:25px"
                            alt="">
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center flex-column align-items-center pt-4">
                    <div class="font-size-20 font-weigth-700">Đặt hàng thành công</div>
                    <div class="font-size-20">Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</div>
                </div>

                <div class="w-100 d-flex justify-content-center pt-4 flex-column align-items-center">
                    <div class="w-60 d-flex mb-3">
                        <div class="w-70">Số điện thoại:</div>
                        <div class="flex-1 font-weigth-700 ">0329878741</div>
                    </div>
                    <div class="w-60 d-flex">
                        <div class="w-70">Tên người nhận:</div>
                        <div class="flex-1 font-weigth-700 ">Dương</div>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center pt-3 flex-column align-items-center">
                    <div class="w-60 d-flex mb-3">
                        <div class="w-70">Mã đơn hàng:</div>
                        <div class="flex-1 font-weigth-700">163827</div>
                    </div>
                    <div class="w-60 d-flex">
                        <div class="w-70">Ngày:</div>
                        <div class="flex-1 font-weigth-700">28/10/2022</div>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center pt-3 flex-column align-items-center">
                    <div class="w-60 d-flex mb-2">
                        <div class="w-70">Phương thức thanh toán:</div>
                        <div class="flex-1 font-weigth-700">Trả tiền mặt khi nhận hàng</div>
                    </div>
                    <div class="w-60 d-flex mb-3">
                        <div class="w-70">Tổng cộng::</div>
                        <div class="flex-1 font-weigth-700 ">62.890.000đ</div>
                    </div>
                </div>

                <div class="w-100 d-flex justify-content-center pb-3">
                    <div class="w-50 d-flex justify-content-center">
                        <a href="" class=" m-link">Trở về trang
                            chủ</a>
                    </div>
                </div>
            </div>
            <div class="order-succes-right flex-1 font-size-18">
                <div class="w-100 order-success-right-main h-90">
                    <div class="font-size-20 mb-4 order-success-right-title p-3">3 sản phẩm</div>
                    <div class="d-flex mb-5 p-3">
                        <div class="w-25 h-25">
                            <img src="{{ asset('assets/images/iPhone_14_Pro_Max-Pur1 1.jpg') }}" class="w-100 h-100"
                                alt="">
                        </div>
                        <div class="d-flex flex-column ms-3 flex-1 justify-content-between">
                            <div>Iphone 14 Plus 128GB - Blue</div>
                            <div class="d-flex justify-content-between">
                                <div>Số lượng: <b>1</b></div>

                                <div class="font-weigth-700">24.450.000đ</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-5 p-3">
                        <div class="w-25 h-25">
                            <img src="{{ asset('assets/images/iPhone_14_Pro_Max-Pur1 1.jpg') }}" class="w-100 h-100"
                                alt="">
                        </div>
                        <div class="d-flex flex-column ms-3 flex-1 justify-content-between">
                            <div>Iphone 14 Plus 128GB - Blue</div>
                            <div class="d-flex justify-content-between">
                                <div>Số lượng: <b>1</b></div>

                                <div class="font-weigth-700">24.450.000đ</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>

</html>

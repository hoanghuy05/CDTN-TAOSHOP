<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiểm tra đơn hàng</title>
    <link rel="stylesheet" href="{{ asset('css/users/ordercheck.css') }}">
</head>

<body>
    <div class="order-check-wrapper ">
        <div class="order-check-container">
            <div class="order-check-left d-flex justify-content-center">
                <div class="order-check-image"></div>
            </div>
            <div
                class="order-check-right flex-1 d-flex flex-column  align-items-center justify-content-center mb-5 me-5">
                <div class="fs-3 mb-5">Kiểm tra đơn hàng của bạn</div>
                <div class="mb-5 w-100 d-flex">
                    <input type="text" class="ms-input  flex-1" placeholder="Vui lòng nhập mã đơn hàng">
                </div>
                <div>
                    <button class="btn btn-dark ps-5 pt-1 pb-1 fs-4 pe-5">Tra cứu</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chính sách bảo hành</title>
    <link rel="stylesheet" href="{{ asset('css/users/warrantypolicy.css') }}">
</head>

<body>
    @extends('users.Home')
    @section('content')
        <div class="WarrantyPolicy-wrapper pt-4">
            <div class="WarrantyPolicy-container">
                <div class="WarrantyPolicy-title">Chính sách bảo hành sản phẩm Apple</div>
                <div class="WarrantyPolicy-extra">Chính sách bảo hành tuân thủ theo đúng quy định của Apple áp dụng tại thị
                    trường Việt
                    Nam</div>
                <div class="font-weigth-600 pt-3">Luôn ưu tiên quyền lợi của khách hàng là quan trọng nhất, ShopDunk đưa ra
                    chính
                    sách bảo hành tuân thủ
                    theo đúng quy định của Apple áp dụng tại thị trường Việt Nam.
                </div>
                <div class="font-weigth-700 pt-5" style="font-size: 20px">Chính sách bảo hành tiêu chuẩn Apple</div>
                <div class="list-WarrantyPolicy">
                    <div class="list-WarrantyPolicy-title pt-4">Áp dụng cho tất cả sản phẩm do công ty TNHH Apple Việt Nam
                        phân
                        phối và được ShopDunk bán ra:
                    </div>
                    <div class="list-WarrantyPolicy-ul">
                        <li class="pt-4">Tuân theo điều khoản bảo hành của Apple, áp dụng từ thời điểm xuất hóa đơn cho
                            khách hàng.</li>
                        <li class="pt-4 pb-4">Link tham khảo: <a
                                href="">https://www.apple.com/legal/warranty/products/ios-warranty-rest-of-apac-vietnamese.html</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>

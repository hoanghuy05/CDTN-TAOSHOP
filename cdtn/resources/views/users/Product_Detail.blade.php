<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="{{ asset('css/users/product_detail.css') }}">
</head>

<body>
    @extends('users.Home')
    @section('content')
        <div class="product-detail-wrapper">
            <div class="product-detail-header">
                <div class="pd-header-left d-flex flex-column">
                    <div class="pd-header-left-image">
                        <div class="header-left-image-product">
                            @isset($product)
                                <img src="{{ asset('assets/products/' . $product->image) }}" alt="">
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="pd-header-right">
                    <div class="header-right-productname font-size-20 font-weigth-700">
                        @isset($product)
                            {{ $product->product_name }}
                        @endisset
                    </div>
                    <div class="header-right-feedback d-flex flex-row align-items-center">
                        <div class="header-right-star d-flex me-3">
                            <div class="mi-16 icon-star mi-bg-image"></div>
                            <div class="mi-16 icon-star mi-bg-image"></div>
                            <div class="mi-16 icon-star mi-bg-image"></div>
                            <div class="mi-16 icon-star mi-bg-image"></div>
                            <div class="mi-16 icon-star mi-bg-image"></div>
                        </div>
                        <div class="me-3 text-color-primary">0 đánh giá</div>
                        <div class="text-color-primary">60 hỏi đáp</div>
                    </div>
                    <div class="product-detail-price font-weigth-700">
                        @isset($product)
                            {{ number_format($product->price, 0, ',', '.') }} đ
                        @endisset
                    </div>

                    <div class="product-detail-capacity">
                        <div class="mt-3">Chọn dung lượng</div>
                        <div class="product-detail-capacity-list mt-1 d-flex flex-row">
                            <div class="product-detail-capacity-item">128gb</div>
                            <div class="product-detail-capacity-item">256gb</div>
                            <div class="product-detail-capacity-item">512gb</div>
                            <div class="product-detail-capacity-item">1TB</div>
                        </div>
                    </div>


                    <div class="product-detail-color">
                        <div class="mt-3">Chọn màu</div>
                        <div class="product-detail-color-list mt-1 d-flex flex-row">
                            <div class="product-detail-color-item me-3 "></div>
                            <div class="product-detail-color-item me-3"></div>
                            <div class="product-detail-color-item me-3"></div>
                            <div class="product-detail-color-item me-3"></div>
                        </div>
                    </div>


                    <div class="product-detail-endow mt-4">
                        <div class="text-color-danger font-weight-700">*Ưu đãi đặc quyền</div>
                        <div class="mt-2">Trợ giá 1.000.000đ cho khách hàng thu cũ đổi mới lên iPhone 14 Pro Max</div>
                    </div>


                    <div class="product-detail-buttons mt-4">
                        @auth
                            @isset($product)
                                <a href="{{ route('indexOrder', $product->id) }}"> <button
                                        class="btn btn-primary m-btn me-1 p-2">Mua
                                        ngay</button></a>
                            @endisset
                        @else
                            <button class="btn btn-primary m-btn me-1 p-2 order-now-no-login">Mua
                                ngay</button>
                        @endauth

                        <button class="btn btn-bg-light m-btn ms-4 p-2">Tính toán trả góp</button>
                    </div>

                    <div class="detail-more-information mt-3">
                        <div class="detail-more-information-list">
                            <div class="detail-more-information-item d-flex flex-row align-items-center mb-1">
                                <div class="detail-more-information-icon mi-bg-image mi-16 icon-check-active me-2"></div>
                                <div class="detail-more-information-content">Bộ sản phẩm gồm: Hộp, Sách hướng dẫn, Cây lấy
                                    sim, Cáp Lightning - Type C</div>
                            </div>
                            <div class="detail-more-information-item d-flex flex-row align-items-center mb-1">
                                <div class="detail-more-information-icon mi-bg-image mi-16 icon-check-active me-2"></div>
                                <div class="detail-more-information-content">Bảo hành chính hãng 1 năm <span
                                        class="text-color-primary">Xem chi tiết</span></div>
                            </div>
                            <div class="detail-more-information-item d-flex flex-row align-items-center mb-1">
                                <div class="detail-more-information-icon mi-bg-image mi-16 icon-check-active me-2"></div>
                                <div class="detail-more-information-content me-2">Giao hàng toàn quốc<span
                                        class="text-color-primary ms-2">Xem chi tiết</span></div>
                            </div>
                            <div class="detail-more-information-item d-flex flex-row align-items-center mb-1">
                                <div class="detail-more-information-icon mi-bg-image mi-16 icon-check-active me-2"></div>
                                <div class="detail-more-information-content me-2">Gọi đặt mua <span
                                        class="text-color-primary">1900 6886</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-detail-header-extra mt-4">
                {{ $product->product_name }}. Bắt trọn chi tiết ấn tượng với Camera Chính 4K. Trải nghiệm iPhone theo cách hoàn toàn
                mới với Dynamic Island và màn hình Luôn Bật. Công nghệ an toàn quan trọng – Phát Hiện Va Chạm thay bạn gọi
                trợ giúp khi cần kíp
            </div>

            <div class="product-detail-describe">
                <div class="product-detail-describe-title font-weight-700">Mô tả</div>
                <div class="product-detail-describe-prodetail-name fs-3 mt-4 mb-4">{{ $product->product_name }}</div>

                <div class="product-detail-describe-list">
                    <div class="product-detail-describe-item">
                        <div class="describe-item-title fs-3">Tính năng nổi bật</div>
                        <ul class="describe-item-ul">
                            <li class="describe-item-li mt-3">Màn hình {{ $product->screen }} với tính năng Luôn Bật và
                                ProMotion</li>
                            <li class="describe-item-li ">Camera Chính 4K cho độ phân giải gấp 4 lần</li>
                            <li class="describe-item-li ">Chế độ Điện Ảnh nay đã hỗ trợ 4K Dolby Vision tốc độ lên đến 60
                                fps</li>
                            <li class="describe-item-li ">Chế độ Hành Động để quay video cầm tay mượt mà, ổn định</li>
                            <li class="describe-item-li ">Công nghệ an toàn quan trọng – Phát Hiện Va Chạm thay bạn gọi trợ
                                giúp khi cần kíp</li>
                            <li class="describe-item-li ">Thời lượng pin cả ngày và thời gian xem video lên đến 29 giờ3</li>
                            <li class="describe-item-li ">{{ $product->chip }}, chip điện thoại thông minh tuyệt đỉnh. Mạng di động 5G
                                siêu nhanh</li>
                            <li class="describe-item-li ">Các tính năng về độ bền dẫn đầu như Ceramic Shield và khả năng
                                chống nước</li>
                        </ul>
                    </div>
                </div>
                <div class="product-detail-describe-list">
                    <div class="product-detail-describe-item">
                        <div class="describe-item-title fs-3">Các thông tin Apple đảm bảo (Pháp lý)</div>
                        <ul class="describe-item-ul">
                            <li class="describe-item-li mt-3">{{ $product->product_name }} có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 2 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn, và khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng. Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập apple.com/batteries để biết thêm thông tin. Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình {{ $product->product_name }} là {{ $product->screen }} theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn. Không bán kèm bộ sạc không dây Qi.</li>
                        </ul>
                    </div>
                </div>


                <div class="product-detail-specifications">
                    <div class="product-detail-specifications-title fs-3 font-weigth-700">Thông số kĩ thuật</div>
                    <div class="product-detail-specifications-box mt-5">
                        @isset($product)
                            <div class="product-detail-specifications-main">
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Dung lượng</div>
                                    <div class="flex-1 text-color-white">128gb</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Màn hình</div>
                                    <div class="flex-1 text-color-white">{{ $product->screen }}</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Độ phân giải màn hình</div>
                                    <div class="flex-1 text-color-white">{{ $product->screen_resolution }}</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Camera sau</div>
                                    <div class="flex-1 text-color-white">4K</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Camera trước</div>
                                    <div class="flex-1 text-color-white">60 fps</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Pin</div>
                                    <div class="flex-1 text-color-white">{{ $product->pin }}</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Cân nặng</div>
                                    <div class="flex-1 text-color-white">{{ $product->weight }}g</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Kết nối mạng</div>
                                    <div class="flex-1 text-color-white">Tốc độ cao</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Chip</div>
                                    <div class="flex-1 text-color-white">{{ $product->chip }}</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Giảm giá</div>
                                    <div class="flex-1 text-color-white">{{ $product->discount }}%</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Bảo mật</div>
                                    <div class="flex-1 text-color-white">Cao</div>
                                </div>
                                <div class="d-flex w-100 item-product-detail-specifications mb-2">
                                    <div class="flex-1 font-weigth-500">Chống nước</div>
                                    <div class="flex-1 text-color-white">Tốt</div>
                                </div>
                            </div>
                        @endisset
                    </div>
                </div>


                {{-- Chi tiết sản phẩm --}}

                <div class="">
                    <div class="product-detail-specifications-title fs-3 mt-5 font-weigth-700">Chi tiết sản phẩm</div>
                    <div class="product-detail-detail mt-3 font-weight-normal">
                        <div>Hiệu suất tối ưu và tốc độ xử lý nhanh chóng với Chip {{ $product->chip }} mạnh mẽ.</div>
                        <div>{{ $product->product_name }} nâng cấp hệ thống camera lên tới 60fps chuyên nghiệp hoành tráng chưa từng
                            có. Chip {{ $product->chip }}, CPU 6 lõi với 2 lõi hiệu suất và 4 lõi hiệu quả, GPU 5 lõi. Thiết kế bền bỉ
                            và thời lượng pin dài nhất từng có trên iPhone, có giá là {{ number_format($product->price) }} VNĐ, bắt đầu đặt hàng tại Mỹ từ 16/9/2022</div>
                    </div>
                </div>


                {{-- Đặc điểm nổi bật --}}
                <div class="product-detail-characteristics">
                    <div class="fs-3 mt-3">Đặc điểm nổi bật</div>
                    <ul class="describe-item-ul">
                        <li class="mb-1">Hiệu suất tối ưu và tốc độ xử lý nhanh chóng với Chip A16 Bionic mạnh mẽ và RAM
                            6GB</li>
                        <li class="mb-1">Chống nước và chống bụi (chống nước ở độ sâu 2 mét trong vòng tối đa 30 phút, đạt mức IP68)</li>
                        <li class="mb-1">Khả năng sạc nhanh</li>
                        <li class="mb-1">Xác thực bảo mật với Face ID</li>
                    </ul>
                </div>


                {{-- Đánh giá --}}

                <div class="product-detail-evaluate">
                    <div class="product-detail-specifications-title fs-3 mt-5 font-weigth-700">
                        Đánh giá
                    </div>
                    <div class="product-detail-specifications-amount fs-5 mt-3">1 comment</div>
                    <div class="product-detail-comment-box d-flex flex-row mt-3 align-items-center">
                        <div class="product-detail-comment-avatar">
                            <img src="{{ asset('assets/icons/search.jpg') }}" alt="">
                        </div>
                        <div class="flex-1">
                            <input type="text" class="ms-5 ms-input product-detail-comment-input"
                                placeholder="Add a comment">
                        </div>
                    </div>
                    <div class="product-detail-comment-box d-flex flex-row mt-3 align-items-center">
                        <div class="product-detail-comment-avatar">
                            <img src="{{ asset('assets/icons/search.jpg') }}" alt="">
                        </div>
                        <div class="d-flex flex-column ms-5 ">
                            <div class="text-color-primary">Mono</div>
                            <div>hàng đẹp</div>
                            <div class="">
                                <span class="text-color-primary">Like</span>
                                <span class="text-color-primary ms-3">Reply</span>
                                <span class="ms-3 text-color-white">1d</span>
                            </div>
                            <div class="header-right-star d-flex mt-2">
                                <div class="mi-16 icon-star mi-bg-image"></div>
                                <div class="mi-16 icon-star mi-bg-image"></div>
                                <div class="mi-16 icon-star mi-bg-image"></div>
                                <div class="mi-16 icon-star mi-bg-image"></div>
                                <div class="mi-16 icon-star mi-bg-image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>

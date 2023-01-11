@section('title')
    Tin tức
@endsection
@extends('users.Home')
@section('content')
    <div class="newfeed-wrapper">
        <div class="newfeed-banner">
            <ul class="banner-slide">
                <li class="banner-item"><img src="{{ asset('assets/banner/1.jpg') }}" alt=""></li>
                <li class="banner-item"><img src="{{ asset('assets/banner/2.jpg') }}" alt=""></li>
                <li class="banner-item"><img src="{{ asset('assets/banner/5.jpg') }}" alt=""></li>
                <li class="banner-item"><img src="{{ asset('assets/banner/4.jpg') }}" alt=""></li>
            </ul>
        </div>

        <div class="newfeed-container">
            <div class="newfeed-container-title">Tin mới nhất</div>
            <div class="newfeed-content">
                <div class="newfeed-item">
                    <div class="newfeed-item-image">
                        <img src="{{ asset('assets/newfeed/photo-2-16704865407831522309974.jpg') }}" alt="">
                    </div>
                    <div class="newfeed-item-right">
                        <div class="newfeed-item-title">
                            Mẫu iPhone nhiều người ưa chuộng sắp biến mất khỏi đại lý chính hãng ở Việt Nam
                        </div>
                        <div class="author-newfeed">Tek-life - 2 ngày trước</div>
                        <div class="newfeed-item-content">Một số đại lý chính hãng đã ngừng kinh doanh mẫu iPhone này, trong
                            khi một số khác dự đoán sẽ nhanh chóng hết hàng trong thời gian sắp tới.</div>
                    </div>
                </div>
                <div class="newfeed-item">
                    <div class="newfeed-item-image">
                        <img src="{{ asset('assets/newfeed/photo1670472265914-1670472266139891199320.jpg') }}"
                            alt="">
                    </div>
                    <div class="newfeed-item-right">
                        <div class="newfeed-item-title">
                            iPhone 14 Pro Max “rất tuyệt” nhưng tại sao bạn vẫn nên đợi iPhone 15 Ultra?
                        </div>
                        <div class="author-newfeed">Tek-life - 2 ngày trước</div>
                        <div class="newfeed-item-content">Apple quay xe, iPhone 15 chốt thiết kế vô cùng khác biệt</div>
                    </div>
                </div>
                <div class="newfeed-item">
                    <div class="newfeed-item-image">
                        <img src="{{ asset('assets/newfeed/photo1670502033210-16705020340361874703183.jpg') }}"
                            alt="">
                    </div>
                    <div class="newfeed-item-right">
                        <div class="newfeed-item-title">
                            “Việt Nam sẽ sản xuất iPhone cho Apple, cùng Ấn Độ đảm nhận 50% sản lượng”
                        </div>
                        <div class="author-newfeed">Tek-life - 2 ngày trước</div>
                        <div class="newfeed-item-content">Vị thế của Việt Nam trong bước ngoặt chiến lược của Apple.</div>
                    </div>
                </div>
                <div class="newfeed-item">
                    <div class="newfeed-item-image">
                        <img src="{{ asset('assets/newfeed/photo1670464951137-1670464951346789373759.jpg') }}"
                            alt="">
                    </div>
                    <div class="newfeed-item-right">
                        <div class="newfeed-item-title">
                            iPhone 14 có thể giúp bạn thoát khỏi tình huống nguy hiểm nhờ tính năng đặc biệt
                        </div>
                        <div class="author-newfeed">Tek-life - 2 ngày trước</div>
                        <div class="newfeed-item-content">9 giải thưởng xa xỉ nhất trong các giải bóng đá khắp thế giới: Từ
                            siêu xe Rolls-Royce đến đồng hồ Rolex, giải lớn nhất trị giá tới 20 triệu USD</div>
                    </div>
                </div>

            </div>
        </div>


        <div class="hot_news-wrapper">
            <div class="hot_news-wrapper-title">Tin nổi bật</div>
            <div class="hot_news-container">

                <div class="hot_news-menu">
                    <div class="hot_news-item">
                        <div class="hot_news-image">
                            <img src="{{ asset('assets/newfeed/tt1.jpg') }}"
                                alt="">
                        </div>
                        <div class="hot_news-title">iPhone, MacBook về mức rẻ nhất năm dịp Black Friday</div>
                        <div class="hot_news-date">Ngày 12/10/2022</div>
                    </div>
                    <div class="hot_news-item">
                        <div class="hot_news-image">
                            <img src="{{ asset('assets/newfeed/tt2.jpg') }}"
                                alt="">
                        </div>
                        <div class="hot_news-title">Apple nghiên cứu modem 5G thất bại, tương lai iPhone 15 ra sao?</div>
                        <div class="hot_news-date">Ngày 12/10/2022</div>
                    </div>
                    <div class="hot_news-item">
                        <div class="hot_news-image">
                            <img src="{{ asset('assets/newfeed/tt3.jpg') }}"
                                alt="">
                        </div>
                        <div class="hot_news-title">iPhone 14 đã sẵn sàng được lắp ráp, sẽ lên kệ đúng hẹn</div>
                        <div class="hot_news-date">Ngày 12/10/2022</div>
                    </div>

                    <div class="hot_news-item">
                        <div class="hot_news-image">
                            <img src="{{ asset('assets/newfeed/tt4.jpg') }}"
                                alt="">
                        </div>
                        <div class="hot_news-title">Hồi sinh biệt danh Plus, Apple sẽ không ra mắt iPhone 14 Max?</div>
                        <div class="hot_news-date">Ngày 12/10/2022</div>
                    </div>
                    <div class="hot_news-item">
                        <div class="hot_news-image">
                            <img src="{{ asset('assets/newfeed/tt5.jpg') }}"
                                alt="">
                        </div>
                        <div class="hot_news-title">iPhone 14 Max sẽ là sản phẩm tụt hậu của Apple so với đối thủ</div>
                        <div class="hot_news-date">Ngày 12/10/2022</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('title')
    Home
@endsection
@section('content')
    <div class="m-banner">
        <ul class="banner-slide">
            <li class="banner-item"><img src="{{ asset('assets/banner/1.jpg') }}" alt=""></li>
            <li class="banner-item"><img src="{{ asset('assets/banner/2.jpg') }}" alt=""></li>
            <li class="banner-item"><img src="{{ asset('assets/banner/5.jpg') }}" alt=""></li>
            <li class="banner-item"><img src="{{ asset('assets/banner/4.jpg') }}" alt=""></li>
        </ul>
    </div>
    <div class="m-wrapper-box ">
        <div class="wrapper-title d-flex justify-content-center"><span>Điện thoại nổi bật nhất</span></div>
        <div class="wrapper-list-box">
            <div class="wrapper-list row" id="ProductIphone">


                @isset($products)
                    @foreach ($products as $product)
                        <a href="{{ route('get_by_id', $product->id) }}">
                            <div class="wrapper-item">
                                <div>
                                    <div class="wrapper-item-image">
                                        <div class="item-product-image">


                                            {{-- <img src="{{ asset('assets/images/ipad.jpg') }}" alt=""> --}}
                                            <img src="{{ asset('assets/products/' . $product->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="wrapper-item-name">{{ $product->product_name }}</div>
                                    <div class="wrapper-item-price">
                                        Giá từ: {{ number_format($product->price, 0, ',', '.') }} VNĐ
                                    </div>
                                    <div class="wrapper-item-attach"></div>
                                </div>
                            </div>
                            @if ($product->discount >= 0)
                                <div class="product-discount">
                                    Giảm {{ $product->discount }} %
                                </div>
                            @endif
                            
                        </a>
                    @endforeach
                    {{ $products }}
                @endisset
            </div>
            <div class="wrapper-more see-more d-flex justify-content-center">
                <span>Xem thêm</span>
            </div>

        </div>


        <div class="m-wrapper-box ">
            <div class="wrapper-title d-flex justify-content-center"><span>Máy tính bảng</span></div>
            <div class="wrapper-list-box">
                <div class="wrapper-list row ipad-page">
                    @isset($ipads)
                        @foreach ($ipads as $ipad)
                            <a href="{{ route('get_by_id', $ipad->id) }}">
                                <div class="wrapper-item">
                                    <div>
                                        <div class="wrapper-item-image">
                                            <div class="item-product-image">


                                                {{-- <img src="{{ asset('assets/images/ipad.jpg') }}" alt=""> --}}
                                                <img src="{{ asset('assets/products/' . $ipad->image) }}" alt="">
                                            </div>
                                        </div>
                                        <div class="wrapper-item-name">{{ $ipad->product_name }}</div>
                                        <div class="wrapper-item-price">
                                            Giá từ: {{ number_format($ipad->price, 0, ',', '.') }} VNĐ
                                        </div>
                                        <div class="wrapper-item-attach"></div>
                                    </div>
                                </div>
                                @if ($ipad->discount >= 0)
                                <div class="product-discount">
                                    Giảm {{ $ipad->discount }} %
                                </div>
                                @endif
                            </a>
                        @endforeach
                    @endisset
                </div>
            </div>
        @endsection

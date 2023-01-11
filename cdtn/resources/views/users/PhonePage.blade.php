@section('title')
    Điện thoại
@endsection
@extends('users.Home')
@section('content')
    <div class="phone-wrapper d-flex justify-content-center">
        <div class="phone-container">
            <div class="phone-main-box pt-5">
                <div class="phone-main">
                    <div class="phone-list-box">
                        <div class="phone-list row">
                            @isset($products)
                                @foreach ($products as $product)
                                    <a href="{{ route('get_by_id', $product->id) }}">
                                        <div class=" phone-item-box">
                                            <div class="phone-item">
                                                <div class="wrapper-item-image">
                                                    <div class="phone-item-image">
                                                        <img src="{{ asset('assets/products/' . $product->image) }}"
                                                            alt="" class="">
                                                    </div>
                                                </div>
                                                <div class="wrapper-item-name">{{ $product->product_name }}</div>
                                                <div class="wrapper-item-price">
                                                    Giá từ: {{ number_format($product->price, 0, ',', '.') }}đ
                                                </div>
                                                <div class="wrapper-item-attach"></div>
                                            </div>
                                        </div>

                                        @if ($product->discount > 0)
                                            <div class="product-discount">
                                                Giảm {{ $product->discount }} %
                                            </div>
                                        @endif
                                    </a>
                                @endforeach
                                {{ $products }}
                            @endisset

                        </div>


                    </div>
                    <div class="wrapper-more see-more-phone d-flex justify-content-center">
                        <span>Xem thêm</span>
                    </div>
                </div>
            </div>



            <div class="phone-footer"></div>
        </div>
    </div>
@endsection
</body>

</html>

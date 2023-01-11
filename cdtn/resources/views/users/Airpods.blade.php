@section('title')
    Airpods
@endsection
@extends('users.Home')
@section('content')
    <div class="ipad-wrapper d-flex justify-content-center">
        <div class="ipad-container">
            <div class="ipad-main-box pt-5">
                <div class="ipad-main">
                    <div class="ipad-list-box">
                        <div class="ipad-list row">
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
                                    </a>
                                @endforeach
                                {{ $products }}
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
            <div class="phone-footer"></div>
        </div>
    </div>
@endsection
</body>
</html>

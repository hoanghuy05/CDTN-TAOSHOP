@section('title')
    Phụ kiện
@endsection
@extends('users.Home')
@section('content')
    <div class="m-wrapper-box ">
        <div class="wrapper-title d-flex justify-content-center"><span>Phụ kiện</span></div>
        <div class="wrapper-list-box">
            <div class="wrapper-list row accessories">
                <a href="">
                    <div class="wrapper-item">
                        <div>
                            @isset($products)
                                @foreach ($products as $product)
                                <a href="{{ route('get_by_id', $product->id) }}">
                            <div class="wrapper-item-image">
                                <div class="item-product-image">
                                    <img src="{{ asset('assets/products/' . $product->image) }}" alt="">
                                </div>
                            </div>
                            <div class="wrapper-item-name">
                                Thay camera sau iphone 6s plus
                            </div>
                            <div class="wrapper-item-price">
                                100,000đ
                            </div>
                            <div class="wrapper-item-attach"></div>
                            @endforeach
                                {{ $products }}
                            @endisset
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </div>
@endsection

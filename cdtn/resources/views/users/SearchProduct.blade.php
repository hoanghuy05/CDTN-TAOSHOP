@section('title')
    Tìm kiếm
@endsection
@extends('users.Home')
@section('content')
        <div class="phone-wrapper d-flex justify-content-center">
            <div class="phone-container">
                <div class="phone-main-box pt-5">
                    <div class="phone-main">
                        <div class="phone-list-box">
                            <div class="phone-list row">
                                @isset($search)
                                    @foreach ($search as $key => $item)
                                        <a href="{{ route('get_by_id', $item->id) }}">
                                            <div class=" phone-item-box">
                                                <div class="phone-item">
                                                    <div class="wrapper-item-image">
                                                        <div class="phone-item-image">
                                                            <img src="{{ asset('assets/products/' . $item->image) }}"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="wrapper-item-name">{{ $item->product_name }}</div>
                                                    <div class="wrapper-item-price">
                                                        Giá từ: {{ number_format($item->price, 0, ',', '.') }}đ
                                                    </div>
                                                    <div class="wrapper-item-attach"></div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
                <div class="phone-footer"></div>
            </div>
        </div>
@endsection

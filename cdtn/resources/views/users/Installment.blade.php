@section('title')
    Trả góp
@endsection
@extends('users.Home')
@section('content')
    <div class="installment-wrapper">
        <div class="installment-container">
            <div class="installment-header">
                <div class="installment-header-left flex-1">
                    <img src="{{ asset('assets/images/iPhone_14_Pro_Max-Pur1 1.jpg') }}" alt="">
                </div>
                <div class="installment-header-right flex-1">
                    <div class="installment-header-title">Camera sau iphone 6 plus</div>
                    <div class="header-right-star d-flex mt-2">
                        <div class="mi-16 icon-star mi-bg-image"></div>
                        <div class="mi-16 icon-star mi-bg-image"></div>
                        <div class="mi-16 icon-star mi-bg-image"></div>
                        <div class="mi-16 icon-star mi-bg-image"></div>
                        <div class="mi-16 icon-star mi-bg-image"></div>
                        <div class="ms-2 text-color-primary">0 đánh giá</div>
                        <div class="ms-3 text-color-primary">60 hỏi đáp</div>
                    </div>
                    <div class="installment-price">350.000đ</div>
                    <div class="btn-installment mt-5">
                        <div class="btn-btn-installment">Yêu cầu đến cửa hàng</div>
                    </div>
                </div>
            </div>
            <div class="installment-footer">
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
                            <div class="header-right-star d-flex mt-2 mb-4">
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
    </div>
@endsection

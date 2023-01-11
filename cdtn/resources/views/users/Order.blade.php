@section('title')
    Giỏ hàng
@endsection
@extends('users.Home')
@section('content')
    <div class="m-order-wrapper">
        <div class="m-order-container d-flex flex-row pt-4 pb-3 ">
            <div class="m-order-left">
                <div class="m-table-box w-100">
                    <form action="" method="post">
                        @csrf
                        <table class="m-table-order w-100">
                            <thead>
                                <tr>
                                    <th class="ms-th">
                                        <div class="ms-th-title">Sản phẩm</div>
                                    </th>
                                    <th class="ms-th">
                                        <div class="ms-th-title">Giá</div>
                                    </th>
                                    <th class="ms-th">
                                        <div class="ms-th-title">Số lượng</div>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($shopping_carts)
                                    @foreach ($shopping_carts as $shopping_cart)
                                        <tr class="ms-tr">
                                            <td class="ms-td">
                                                <div class="w-100 h-75 d-flex align-items-center">
                                                    <div class="ms-td-col">
                                                        <img src="{{ asset('assets/products/' . $shopping_cart->image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="ms-4">
                                                        {{ $shopping_cart->product_name }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ms-td">
                                                <div><span
                                                        class="total-price">{{ number_format($shopping_cart->price) }}
                                                        đ</span>
                                                </div>
                                            </td>
                                            <td class="ms-td">
                                                <div class="d-flex align-items-center">
                                                    <a><button class="btn btn-outline-secondary me-2 minusTotal" id="minusTotal"
                                                            data-url="{{ route('addOrder', $shopping_cart->id) }}">-</button></a>
                                                    <div><span
                                                            class="total-quantity">{{ $shopping_cart->total_quantity }}</span>
                                                    </div>
                                                    <a href=""><button class="btn btn-outline-secondary ms-2 sumTotal"
                                                            id="sumTotal"
                                                            data-url="{{ route('addOrder', $shopping_cart->id) }}">+</button></a>
                                                </div>
                                            </td>
                                            <td class="ms-td">
                                                <div class="mi-24 mb-2">
                                                    <img src="{{ asset('assets/icons/x-circle.jpg') }}" class="w-100 h-100"
                                                        alt="">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset


                                @isset($cart_detail, $products)
                                    @foreach ($products as $product)
                                        <tr class="ms-tr">
                                            <td class="ms-td">
                                                <div class="w-100 h-75 d-flex align-items-center">
                                                    <div class="ms-td-col">
                                                        <img src="{{ asset('assets/products/' . $product->image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="ms-4">
                                                        {{ $product->product_name }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ms-td">
                                                <div><span class="total-price">{{ number_format($product->price) }}
                                                        đ</span>
                                                </div>
                                            </td>
                                            <td class="ms-td">
                                                <div class="d-flex align-items-center">
                                                    <a><button class="btn btn-outline-secondary me-2 minusTotal" id="minusTotal"
                                                            data-url="{{ route('addOrder', $product->product_id) }}">-</button></a>
                                                    <div><span class="total-quantity">{{ $product->total_quantity }}</span>
                                                    </div>
                                                    <a href=""><button class="btn btn-outline-secondary ms-2 sumTotal"
                                                            id="sumTotal"
                                                            data-url="{{ route('addOrder', $product->product_id) }}">+</button></a>
                                                </div>
                                            </td>
                                            <td class="ms-td">
                                                <div class="mi-24 mb-2">
                                                    <img src="{{ asset('assets/icons/x-circle.jpg') }}" class="w-100 h-100"
                                                        alt="">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset

                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="m-order-footer w-100 d-flex mb-1">
                    <div class="w-100 d-flex justify-content-between ps-4 pe-4">
                        <div class="order-footer-item">Mã giảm giá</div>
                        <div class="order-footer-item">Áp dụng mã giảm giá</div>
                        <div class="order-footer-item">Cập nhật giỏ hàng</div>
                    </div>
                </div>
            </div>
            <div class="m-order-right-container flex-1">
                <div class="m-order-right">
                    <div class="order-right-title font-weigth-700 fs-4">Tổng giỏ hàng</div>
                    <div class="order-right-price d-flex w-100 pt-4">
                        <div class="font-weigth-700 w-25">Tổng</div>
                        <div class="flex-1">
                            <span class="total_price">
                                @isset($total_price)
                                    {{ number_format($total_price[0]->total_price) }} đ
                                @endisset
                            </span>
                        </div>
                    </div>
                    <div class="mt-3 font-weigth-500">THÔNG TIN KHÁCH HÀNG</div>
                    <div class="mt-2 d-flex justify-content-center flex-column">
                        <input type="text" class="ms-input w-75" placeholder="Tên khách hàng"
                            value="{{ auth()->user()->username }}">
                        <input type="text" class="ms-input w-75 mt-3" placeholder="Số điện thoại"
                            value="{{ auth()->user()->phone_number }}">
                        <input type="text" class="ms-input w-75 mt-3" placeholder="Địa chỉ giao hàng"
                            value="{{ auth()->user()->address }}">
                        <input type="text" class="ms-input w-75 mt-3" placeholder="Email liên hệ"
                            value="{{ auth()->user()->email }}">
                        <input type="text" class="ms-input w-75 mt-3" placeholder="Ghi chú">
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <button class="btn btn-dark w-50 mt-3">Đặt hàng ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.Home')
@section('admin_content')
    <div class="customer-list-wrapper">
        <div class="customer-list-container">
            <div class="w-100 mb-3">
                <div class="list-title">Kết quả tìm kiếm</div>
            </div>
            <div class="customer-list-header w-100 d-flex justify-content-between">
                <form action="/category/SearchProduct" method="get" role="search">
                    <div class="ms-search">
                        <input type="text" class="ms-input w-100" name="key" placeholder="Tìm kiếm sản phẩm">
                        <div class="mi-24 mi mi-search"></div>
                    </div>
                </form>
                <div class="ms-button">
                    <div class="mi mi-24 icon-check-active"></div>
                    <button class="ms--btn btn-bg-primary btn-color-white pointer" id="addProduct">
                        <div class="mi-24 mi icon-add-white positon-relative mi-add-white"></div>
                        <div class="btn-text pl-0">Thêm sản phẩm</div>
                    </button>
                </div>
            </div>
            <div class="customer-list-main">
                <div class="ms-grid-viewer d-flex flex-column">
                    <div class="ms-content--table flex-1 scroller">
                        <table class="ms-table">
                            <thead>
                                <tr>
                                    <th class="ms-th">ID</th>
                                    <th class="ms-th">Tên sản phẩm</th>
                                    <th class="ms-th">Họ và tên</th>
                                    <th class="ms-th">Giá sản phẩm</th>
                                    <th class="ms-th">Công nghệ màn hình</th>
                                    <th class="ms-th">Pin</th>
                                    <th class="ms-th">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($searchproduct)
                                    @foreach ($searchproduct as $key => $item)
                                        <tr class="ms-tr ms-tr-product" data-url="{{ route('get_product_id', $item->id) }}">
                                            <td class="ms-td">{{ $item->id }}</td>
                                            <td class="ms-td">{{ $item->product_name }}</td>
                                            <td class="ms-td">
                                                <img src="{{ asset('assets/products/' . $item->image) }}" alt="">
                                            </td>
                                            <td class="ms-td">
                                                {{ number_format($item->price, 0, ',', '.') }} VND
                                            </td>
                                            <td class="ms-td">{{ $item->screen }}</td>
                                            <td class="ms-td">{{ $item->pin }}</td>
                                            <td class="ms-td" style="width:26px; max-width:26px">
                                                <div class="row-actions d-flex align-items-center">
                                                    <div class="mi mi-24 mi-edit" title="Sửa"
                                                        update-url="{{ route('updateProduct', $item->id) }}"
                                                        data-url="{{ route('get_product_id', $item->id) }}"></div>
                                                    <div class="ms-4 mi mi-20 mi-delete"
                                                        data-url={{ route('deleteProduct', $item->id) }} title="Xóa">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endsection

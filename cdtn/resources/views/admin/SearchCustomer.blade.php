<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="{{ asset('css/admin/customerlist.css') }}">
</head>

<body>
    @extends('admin.Home')
    @section('admin_content')
        <div class="customer-list-wrapper">
            <div class="customer-list-container">
                <div class="w-100 mb-3">
                    <div class="list-title">Danh sách khách hàng</div>
                </div>
                <div class="customer-list-header w-100 d-flex justify-content-between">
                    <form action="/admin/SearchCustomer" method="get" role="search">
                        <div class="ms-search">
                            <input type="text" class="ms-input w-100" name="key" placeholder="Tìm kiếm khách hàng">
                            <div class="mi-24 mi mi-search"></div>
                        </div>
                    </form>
                    <div class="ms-button">
                        <div class="mi mi-24 icon-check-active"></div>
                        <button class="ms--btn btn-bg-primary btn-color-white pointer" id="addUser">
                            <div class="mi-24 mi icon-add-white positon-relative mi-add-white"></div>
                            <div class="btn-text pl-0">Thêm khách hàng</div>
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
                                        {{-- <th class="ms-th">Avatar</th> --}}
                                        <th class="ms-th">Họ và tên</th>
                                        <th class="ms-th">Giới tính</th>
                                        <th class="ms-th">Email</th>
                                        <th class="ms-th">Địa chỉ</th>
                                        <th class="ms-th">Số điện thoại</th>
                                        <th class="ms-th">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($searchcustomer)
                                        @foreach ($searchcustomer as $key => $item)
                                            <tr class="ms-tr ms-tr-user" data-url="{{ route('get_user_id', $item->id) }}"
                                                update-url="{{ route('updateUser', $item->id) }}">
                                                <td class="ms-td">{{ $item->id }}</td>
                                                <td class="ms-td">{{ $item->username }}</td>
                                                <td class="ms-td">
                                                    @if ($item->gender == 1)
                                                        Nam
                                                    @elseif ($item->gender == 0)
                                                        Nữ
                                                    @else
                                                        Khác
                                                    @endif
                                                </td>
                                                {{-- <td class="ms-td">
                                                    <img src="{{ asset('assets/images/users/' . $user->avatar) }}"
                                                        alt="">
                                                </td> --}}
                                                <td class="ms-td">{{ $item->email }}</td>
                                                <td class="ms-td">{{ $item->address }}</td>
                                                <td class="ms-td">{{ $item->phone_number }}</td>
                                                <td class="ms-td" style="width:26px;">
                                                    <div class="row-actions d-flex align-items-center">
                                                        <div class="mi mi-24 mi-edit" title="Sửa"
                                                            update-url="{{ route('updateUser', $item->id) }}"
                                                            data-url="{{ route('get_user_id', $item->id) }}"></div>
                                                        <div class="ms-4 mi mi-20 mi-delete"
                                                            data-url={{ route('deleteUser', $item->id) }} title="Xóa"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ms-table-box customer-list-table">

                    </div>
                </div>
            @endsection
</body>

</html>

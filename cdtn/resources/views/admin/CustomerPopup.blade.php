<div class="customer-popup-box">
    <form id="registerForm" method="post" action="{{ route('registerUser') }}" data-url="{{ route('registerUser') }}"
        mode=0 enctype="multipart/form-data" default-url="{{ route('registerUser') }}">
        @csrf
        <div class="customer-popup-container">
            <div class="popup-header d-flex">
                <div class="flex-1"><span class="title-popup-user">Thêm khách hàng</span></div>
                <div class="popup-header-buttons d-flex">
                    <div class="icon-help mi mi-20 me-2"></div>
                    <div class="mi mi-20 icon-close"></div>
                </div>
            </div>
            <div class="popup-content">
                <div class="w-100 flex-1">
                    <div class="form-group slide-detail">
                        <label for="" class="form-group-label d-flex">
                            Tên khách hàng
                            <span class="text-color-required">&nbsp; *</span>
                        </label>
                        <div class="flex-1">
                            <div class="ms--input ms-editor w-100">
                                {{-- error --}}
                                <div class="d-flex flex-column">
                                    <input type="text" id="username" propName="username" name="username" required
                                        placeholder="Nhập tên khách hàng" class="ms-input flex-1">
                                    <div class="error--text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group slide-detail d-flex">
                        <div class="flex-1 me-3">
                            <label for="" class="form-group-label d-flex">
                                Avatar
                                <span class="text-color-required">&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex">
                                        {{-- <input type="text" placeholder="Nhập mã khách hàng"
                                                class="ms-input-item flex-1"> --}}
                                        {{-- <input type="file" name="avatar" class="" id="avatar"
                                                propName="avatar"> --}}
                                        <div class="file-input w-100 d-flex">
                                            <input type="file" name="avatar" id="avatar"
                                                class="file-input__input" onchange='uploadFile(this)' />
                                            <label class="file-input__label" for="avatar">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="upload" class="svg-inline--fa fa-upload fa-w-16"
                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                        d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                                    </path>
                                                </svg>
                                                <span>Upload file</span>
                                            </label>
                                            <div class="ms-2 d-flex align-items-center" id="fileName">Không có
                                                tệp nào
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <label for="" class="form-group-label">
                                Giới tính
                                <span class="text-color-required">&nbsp; *</span>
                            </label>
                            <div class="d-flex flex-row align-items-center" style="height: 34px">
                                <div class="flex-1 me-2">
                                    <label class="ms--radio h-100 d-flex align-items-center">
                                        <input type="radio" propName="gender" name="gender" value="1">
                                        <span class="checkmark"></span>
                                        <span class="ms-radio--text text-black pointer">Nam</span>
                                    </label>
                                </div>
                                <div class="flex-1">
                                    <label class="ms--radio h-100 d-flex align-items-center">
                                        <input type="radio" propName="gender" name="gender" value="0">
                                        <span class="checkmark"></span>
                                        <span class="ms-radio--text text-black pointer">Nữ</span>
                                    </label>
                                </div>
                                <div class="flex-1">
                                    <label class="ms--radio h-100 d-flex align-items-center">
                                        <input type="radio" propName="gender" name="gender" value="2">
                                        <span class="checkmark"></span>
                                        <span class="ms-radio--text text-black pointer">Khác</span>
                                    </label>
                                </div>

                            </div>
                            <div class="error--text"></div>
                        </div>
                    </div>

                    <div class="form-group slide-detail d-flex">
                        <div class="flex-1">
                            <label for="" class="form-group-label d-flex">
                                Địa chỉ
                                <span>&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column">
                                        <input type="text" placeholder="Nhập số điện thoại" required
                                            name="address" id="address" propName="address" class="ms-input flex-1">
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group slide-detail d-flex">
                        <div class="flex-1 me-3">
                            <label for="" class="form-group-label d-flex">
                                Số điện thoại
                                <span>&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column">
                                        <input type="text" placeholder="Nhập số điện thoại" id="phone_number"
                                            name="phone_number" propName="phone_number" class="ms-input flex-1">
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <label for="" class="form-group-label d-flex">
                                Email
                                <span>&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column ">
                                        <input type="email" id="email" propName="email" name="email"
                                            placeholder="Nhập email" class="ms-input flex-1"
                                            value="{{ old('email') }}">
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="popup-footer">
                <div class="d-flex flex-row">
                    <div class="flex-1"></div>
                    <div class="flex-rtl">
                        <button class="btn-bg-primary btn-color-white ms--btn" id="btnSave">Lưu</button>
                        {{-- <button class="ms--btn"></button> --}}
                        <div class="ms--btn ms-btn-secondary me-3 icon-close">Hủy</div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

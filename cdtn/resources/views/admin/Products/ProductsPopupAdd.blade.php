<div class="product-popup-box">
    <form id="insertProduct" data-url="{{ route('insertProduct') }}" enctype="multipart/form-data">
        @csrf
        <div class="product-popup-container">
            <div class="popup-header d-flex">
                <div class="flex-1">Thêm sản phẩm</div>
                <div class="popup-header-buttons d-flex">
                    <div class="icon-help mi mi-20 me-2"></div>
                    <div class="mi mi-20 icon-close"></div>
                </div>
            </div>
            <div class="popup-content">
                <div class="w-100 flex-1">
                    <div class="form-group slide-detail">
                        <label for="" class="form-group-label d-flex">
                            Tên sản phẩm
                            <span class="text-color-required">&nbsp; *</span>
                        </label>
                        <div class="flex-1">
                            <div class="ms--input ms-editor w-100">
                                {{-- error --}}
                                <div class="d-flex flex-column">
                                    <input type="text" id="product_name" propName="product_name" name="product_name"
                                        required placeholder="Nhập tên sản phẩm" class="ms-input flex-1"
                                        value="{{ old('product_name') }}">
                                    <div class="error--text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group slide-detail">
                        <label for="" class="form-group-label d-flex">
                            Ảnh sản phẩm
                            <span class="text-color-required">&nbsp; *</span>
                        </label>
                        <div class="flex-1">
                            <div class="ms--input ms-editor w-100">
                                <div class="d-flex">
                                    <div class="file-input w-100 d-flex">
                                        <input type="file" name="image" id="image" class="file-input__input"
                                            onchange='uploadFile(this)' />
                                        <label class="file-input__label" for="image">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="upload" class="svg-inline--fa fa-upload fa-w-16"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                                </path>
                                            </svg>
                                            <span>Upload file</span>
                                        </label>
                                        <div class="ms-2 d-flex align-items-center" id="fileName">
                                            <span id="selected_filename">Không có tệp nào</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="error--text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group slide-detail d-flex">
                        <div class="flex-1  me-3">
                            <label for="" class="form-group-label">
                                Giá sản phẩm
                                <span class="text-color-required">&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column">
                                        <input type="number" placeholder="Nhập giá sản phẩm" id="price"
                                            required required name="price" propName="price" class="ms-input flex-1"
                                            value="{{ old('price') }}">
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="error--text"></div>
                        </div>
                        <div class="flex-1">
                            <label for="" class="form-group-label d-flex">
                                Loại sản phẩm
                                <span class="text-color-required">&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column category_id">
                                        <select name="sources" id="sources" class="custom-select sources" required
                                            placeholder="Loại sản phẩm">
                                            <option value="1">Iphone</option>
                                            <option value="2">Ipad</option>
                                            <option value="3">Airpods</option>
                                            <option value="4">Phụ kiện</option>

                                        </select>
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="form-group slide-detail d-flex">
                        <div class="flex-1 me-3">
                            <label for="" class="form-group-label d-flex">
                                Công nghệ màn hình
                                <span>&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column">
                                        <input type="text" placeholder="Công nghệ màn hình" id="screen"
                                            required name="screen" propName="screen" class="ms-input flex-1"
                                            value="{{ old('screen') }}">
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 me-3">
                            <label for="" class="form-group-label d-flex">
                                Độ phân giải màn hình
                                <span>&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column ">
                                        <input type="text" id="screen_resolution" propName="screen_resolution"
                                            required name="screen_resolution" placeholder="Độ phân giải màn hình"
                                            class="ms-input flex-1" value="{{ old('screen_resolution') }}">
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <label for="" class="form-group-label d-flex">
                                Cân nặng
                                <span>&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column ">
                                        <input type="number" min="0" id="weight" propName="weight"
                                            required name="weight" placeholder="Cân nặng" class="ms-input flex-1"
                                            value="{{ old('weight') }}">
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group slide-detail d-flex">
                        <div class="flex-1 me-3">
                            <label for="" class="form-group-label d-flex">
                                Chipset
                                <span>&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column">
                                        <input type="text" placeholder="Chipset" id="chip" name="chip"
                                            required propName="chip" class="ms-input flex-1"
                                            value="{{ old('chip') }}">
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 me-3">
                            <label for="" class="form-group-label d-flex">
                                Pin
                                <span>&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column ">
                                        <input type="pin" id="pin" propName="pin" name="pin" required
                                            placeholder="Pin" class="ms-input flex-1" value="{{ old('pin') }}">
                                        <div class="error--text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <label for="" class="form-group-label d-flex">
                                Giảm giá
                                <span>&nbsp; *</span>
                            </label>
                            <div class="flex-1">
                                <div class="ms--input ms-editor w-100">
                                    {{-- error --}}
                                    <div class="d-flex flex-column ">
                                        <input type="number" min="0" id="discount" propName="discount"
                                            name="discount" placeholder="Giảm giá" class="ms-input flex-1"
                                            value="{{ old('discount') }}">
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
                        <button class="ms--btn ms-btn-secondary me-3" id="btnClose">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

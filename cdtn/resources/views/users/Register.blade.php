<div class="m-register-box">
    <div class="m-register-container pt-3">
        <div class="m-login">
            <div class="m-login-title">Đăng kí</div>
            <div class="regiter-header-buttons d-flex">
                <div class="mi mi-20 icon-close"></div>
            </div>
            <div class="m-login-logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
            </div>
            <div class="text-color-white text-center pt-3 pb-4">Tạo tài khoản mới</div>
            {{-- id="registerForm" --}}
            <form method="POST" id="registerForm">
                @csrf
                <div class="m-login-main">
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/email.jpg') }}" class="register-main-item-email"
                                alt="">
                        </div>
                        <input type="email" propName="email" class='ms-input w-100 ' required
                            placeholder="Nhập email" name="email" value="{{ old('email') }}">
                        <div class="error--text"></div>

                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/person.jpg') }}" class="register-main-item-email"
                                alt="">
                        </div>
                        <input type="text" id="username" propName="username" class=' ms-input w-100' required
                            placeholder="Nhập họ tên" name="username" value="{{ old('username') }}">
                        <div class="error--text"></div>

                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/icon_phone.jpg') }}" class="register-main-item-password"
                                alt="">
                        </div>
                        <input type="text" id="phone_number" propName="phone_number" class="ms-input w-100 "
                            name="phone_number" required placeholder="Nhập số điện thoại"
                            value="{{ old('phone_number') }}">
                        <div class="error--text"></div>
                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/icon _home.jpg') }}" class="register-main-item-password"
                                alt="">
                        </div>
                        <input type="text" id="address" propName="address" class="ms-input w-100" name="address"
                            required placeholder="Nhập địa chỉ" value="{{ old('address') }}">
                        <div class="error--text"></div>
                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/password.jpg') }}" class="register-main-item-password"
                                alt="">
                        </div>
                        <input type="text" id="password" propName="password" class="ms-input w-100 " required
                            name="password" placeholder="Nhập mật khẩu" value="{{ old('password') }}">
                        <div class="error--text"></div>

                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/password.jpg') }}" class="register-main-item-password"
                                alt="">
                        </div>
                        <input type="text" id="confirmPass" propName="confirmPass" class="ms-input w-100"
                            name="confirmPass" required placeholder="Nhập lại mật khẩu"
                            value="{{ old('confirmPass') }}">
                        <div class="error--text"></div>
                    </div>
                </div>

                <div class="login-footer pt-4 d-flex justify-content-center pb-5">
                    <div>
                        <button type="submit" class="ms--btn btn-bg-primary  btn-color-white">Đăng kí</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

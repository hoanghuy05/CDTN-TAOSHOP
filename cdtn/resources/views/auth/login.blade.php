<div class="m-login-box">
    <div class="m-login-container">
        <div class="m-login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="m-login-title">Đăng nhập</div>
                <div class="login-header-buttons d-flex">
                    <div class="mi mi-20 icon-close"></div>
                </div>
                <div class="m-login-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                </div>
                <div class="text-color-white text-center pt-3">Đăng nhập để bắt đầu phiên bản của bạn</div>
                <div class="m-login-main">
                    <div class="positon-relative login-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/email.jpg') }}" class="login-main-item-email"
                                alt="">
                        </div>
                        <input type="email" id="email" name="Email" class="ms-input w-100" placeholder="Email"
                            required value="{{ old('Email') }}">
                        @error('Email')
                            <div class="error--text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="positon-relative login-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/password.jpg') }}" class="login-main-item-password"
                                alt="">
                        </div>
                        <input type="password" id="password" name="password" class="ms-input w-100"
                            value="{{ old(' ') }}" placeholder="Password" required>
                        @error('Password')
                            <div class="error--text">{{ $message }}</div>
                        @enderror

                    </div>
                </div>

                <div class="login-footer pt-4 d-flex justify-content-between">
                    <div class="text-black ms-checkbox ms-editor d-flex align-items-center">
                        <input type="checkbox" id="remember_me" class="ms-checkbox-control" name="remember">
                        <span class="checkmark"></span>
                        <span class="ms-checkbox--text ">Remember me</span>
                    </div>
                    <div>
                        <button type="submit" class="ms--btn btn-bg-primary  btn-color-white">Sign in</button>
                    </div>
                </div>

                <div class="pt-3 login-footer-texts">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            <div class="text-color-primary pointer">Quên mật khẩu</div>
                        </a>
                    @endif
                    {{-- <div class="text-color-primary pointer">Quên mật khẩu</div> --}}
                    <div class="text-color-primary pointer btn-register"><a href="/register">Đăng kí</a></div>
                </div>
            </form>
        </div>

    </div>
</div>

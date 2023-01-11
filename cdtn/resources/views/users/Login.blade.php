<div class="m-login-box">
    <div class="m-login-container">

        <div class="m-login">
            <form id="loginForm">
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
                        <input type="email" name="email" class="ms-input w-100" id="email" placeholder="Email"
                            required>
                    </div>
                    <div class="positon-relative login-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/password.jpg') }}" class="login-main-item-password"
                                alt="">
                        </div>
                        <input type="text" class="ms-input w-100" name="password" id="password"
                            placeholder="Password" required>
                    </div>
                </div>
                <div class="error--text"></div>

                <div class="login-footer pt-4 d-flex justify-content-between">
                    <div class="text-black ms-checkbox ms-editor d-flex align-items-center">
                        <input type="checkbox" class="ms-checkbox-control">
                        <span class="checkmark"></span>
                        <span class="ms-checkbox--text ">Remember me</span>
                    </div>
                    <div>
                        <button type="submit" class="ms--btn btn-bg-primary  btn-color-white">Sign in</button>
                    </div>
                </div>


                <div class="pt-3 pb-4 login-footer-texts">
                    <div class="text-color-primary pointer">Quên mật khẩu</div>
                    <div class="text-color-primary pointer btn-register"><a href="/register">Đăng kí</a></div>
                </div>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </form>
        </div>

    </div>
</div>

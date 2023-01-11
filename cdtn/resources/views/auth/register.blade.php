{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



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
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="m-login-main">
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/email.jpg') }}" class="register-main-item-email"
                                alt="">
                        </div>
                        {{-- <x-input id="name" class='ms-input w-100 @error('Email')error-border @enderror'
                                required type="text" name="name" :value="old('name')" required autofocus /> --}}
                        <input type="text" class='ms-input w-100 @error('Email')error-border @enderror' required
                            placeholder="Nhập email" name="Email" value="{{ old('Email') }}">
                        @error('Email')
                            <div class="error--text">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/person.jpg') }}" class="register-main-item-email"
                                alt="">
                        </div>
                        <input type="text" class='@error('UserName')error-border @enderror ms-input w-100' required
                            placeholder="Nhập họ tên" name="UserName" value="{{ old('UserName') }}">
                        @error('UserName')
                            <div class="error--text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/icon_phone.jpg') }}" class="register-main-item-password"
                                alt="">
                        </div>
                        <input type="text" class="ms-input w-100 @error('PhoneNumber')error-border @enderror"
                            name="PhoneNumber" required placeholder="Nhập số điện thoại"
                            value="{{ old('PhoneNumber') }}">
                        @error('PhoneNumber')
                            <div class="error--text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/icon _home.jpg') }}" class="register-main-item-password"
                                alt="">
                        </div>
                        <input type="text" class="ms-input w-100" name="Address" required
                            placeholder="Nhập địa chỉ" value="{{ old('Address') }}">
                        @error('Address')
                            <div class="error--text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/password.jpg') }}" class="register-main-item-password"
                                alt="">
                        </div>
                        <input type="password" class="ms-input w-100 @error('password')error-border @enderror" required
                            name="password" placeholder="Nhập mật khẩu" value="{{ old('password') }}">
                        @error('password')
                            <div class="error--text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="positon-relative register-main-item">
                        <div class="mi-24-22">
                            <img src="{{ asset('assets/icons/password.jpg') }}" class="register-main-item-password"
                                alt="">
                        </div>
                        <input type="password" class="ms-input w-100" name="password_confirmation" required
                            placeholder="Nhập lại mật khẩu">
                        @error('password_confirmation')
                            <div class="error--text">{{ $message }}</div>
                        @enderror
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

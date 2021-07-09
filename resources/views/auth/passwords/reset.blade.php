@extends('layouts.app')

@section('content')
<div class="login-bg">
    <div class="login-flex">
        <div class="login-box">
            <div class="login-nav" style="display: block;text-align: center;">
                <h3 class="">{{ __('Reset Password') }}</h3>
                {{-- <h3>验证码登录</h3> --}}
            </div>
            <form method="POST" action="{{ route('password.update') }}">
                     @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="password-box hide">
                    <div class="password-phone">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="请输入手机号码">

                        @error('email')
                             </br>
                            <span class="invalid-feedback" style="color: red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p class="password-xian"></p>
                    <div class="password-text">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="请输入新密码">
                        @error('password')
                         </br>
                            <span class="invalid-feedback" style="color: red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p class="password-xian"></p>
                    <div class="password-text">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="请确认密码">
                    </div>
                    <p class="password-xian"></p>
                    <div class="login-btn">
                        <button  type="submit" class="button"> {{ __('Reset Password') }}</button>
                    </div>
                </div>
            </form>
        </div>
  </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/login.css') }}" rel="stylesheet">
@endsection

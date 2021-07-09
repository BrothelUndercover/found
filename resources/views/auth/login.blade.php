@extends('layouts.app')

@section('content')
<div class="login-bg">
    <div class="login-flex">
        <div class="login-box">
            <div class="login-nav" style="display: block;text-align: center;">
                <h3 class="">密码登录</h3>
                {{-- <h3>验证码登录</h3> --}}
            </div>
            <form method="POST" action="{{ route('login') }}">
                     @csrf
                <div class="password-box hide">
                    <div class="password-phone">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="请输入邮箱">

                        @error('email')
                             </br>
                            <span class="invalid-feedback" style="color: red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p class="password-xian"></p>
                    <div class="password-text">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="请输入密码">
                        @error('password')
                         </br>
                            <span class="invalid-feedback" style="color: red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p class="password-xian"></p>
                    <div class="forget">
                        <a href="{{ route('password.request') }}" >忘记密码</a>
                    </div>
                    <div class="login-btn">
                        <button  type="submit" class="button">登录</button>
                    </div>
                    <div class="no-register">
                        没有账号？<a href="{{ route('register') }}">立即注册</a>
                    </div>
                </div>
            </form>
            <div class="password-box">
                <div class="password-phone">

                    <input id="phone-code" type="text" placeholder="请输入手机号码" name="telephone"  min="0" data-id="60">
                </div>
                <p class="password-xian"></p>
                <div class="password-text">
                    <input id="code" type="password" placeholder="请输入短信验证码"> <span>|</span>
                    <button class="password-code" id="getcodedenglu">获取验证码</button>
                </div>
                <p class="password-xian"></p>

                <div class="duanxin-btn">
                    <button class="button" id="codelogin">登录</button>
                </div>
                <p class="register-tips">

                </p>
                <p class="register-zhuce">点击[注册]即表示同意<a href="#">《服务协议》</a></p>
                <div class="no-register2">
                    没有账号？<a href="/regist">立即注册</a>
                </div>
            </div>
        </div>
  </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/login.css') }}" rel="stylesheet">
@endsection
@section('scripts')
<script>
    $('.login-nav h3').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        $('.password-box').eq($(this).index()).addClass('hide').siblings().removeClass('hide');
    })
</script>
@endsection

@extends('layouts.app')

@section('content')
<div class="login-bg">
    <div class="login-flex">
        <div class="login-box" style="height:440px;">
            <div class="login-nav" style="text-align: center;">
                <h3 style="text-align: center;width:100%;color: black;">账号注册</h3>
            </div>
             <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="password-box hide">
                    <div class="password-phone">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="请输入邮箱" data-id="60">

                        @error('email')
                           </br>
                            <span class="invalid-feedback" style="color:red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p class="password-xian"></p>
                    <div class="password-text">
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="请输入昵称">

                        @error('name')
                        </br>
                            <span class="invalid-feedback" style="color:red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p class="password-xian"></p>
                    <div class="password-text">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="请输入密码" name="password" required autocomplete="new-password">

                        @error('password')
                        </br>
                            <span class="invalid-feedback" style="color:red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p class="password-xian"></p>
                    <div class="password-text">
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" required autocomplete="new-password" placeholder="确认密码">
                    </div>
                    <p class="password-xian"></p>
                    <div class="login-btn">
                        <button id="password-btn" class="button">注册</button>
                    </div>
                    <div class="no-register">
                        已有账号 &nbsp;<a href="{{ route('login')}}">返回登录</a>
                    </div>
                </div>
                </form>
        </div>
    </div>
    <div class="login-footer">
    </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/login.css') }}" rel="stylesheet">
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdn.bootcdn.net/ajax/libs/layer/3.1.1/layer.js"></script>
@endsection

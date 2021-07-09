@extends('layouts.app')

@section('content')
<div class="login-bg">
    <div class="login-flex">
        <div class="login-box">
            <div class="login-nav" style="display: block;text-align: center;">
            @if (session('status'))
                <div class="alert alert-success" style="color:green; margin-bottom: 16px;" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <h3 class="">{{ __('Reset Password') }}</h3>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
                     @csrf
                <div class="password-box hide">
                    <div class="password-phone">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="请输邮箱">

                        @error('email')
                             </br>
                            <span class="invalid-feedback" style="color: red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p class="password-xian"></p>
                    <div class="login-btn">
                        <button  type="submit" class="button"> {{ __('Send Password Reset Link') }}</button>
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

@extends('layouts.app')

@section('title','联系我们')

@section('content')
<div class="about-wrap">
   <div class="wrap">
       <nav class="about-nav">
           <ul class="clearfix">
                <a href="{{ route('pages.about')}}">
                    <li >
                        <span>关于我们</span>
                    </li>
                </a>
                <a href="{{route('pages.contactus' )}}">
                    <li class="active">
                        <span>联系我们</span>
                    </li>
                </a>
                <a href="{{route('pages.agreement' )}}">
                    <li>
                        <span>用户协议</span>
                    </li>
                </a>
                <a href="{{route('pages.statement' )}}">
                    <li>
                        <span>免责声明</span>
                    </li>
                </a>
            </ul>
       </nav>
       <div class="about-content about-hide" style="height: 360px;">
           <p>电话：13202810897</p>

           <p>邮箱：ppc@peitianyan.com</p>

           <p>网址：www.peitianyan.com</p>

           <p>总部地址：深圳市福田区沙头街道天安社区深南大道6021号喜年中心A座2517B6</p>
       </div>
   </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/about.css') }}" rel="stylesheet">
@endsection
@section('scripts')
@endsection

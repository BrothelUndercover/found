@extends('layouts.app')

@section('content')
<div class="bg">
    <div class="container">
        <div class="header-address">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    </div>
                </div>
            </div>
        </div>
        <dlv class="content-box">
            <div class="left-box">
                <div class="left-nav">
                    <div class="nav-box {{ $request->order == 'default' ? 'active': ''}}">
                        <a href="{{ Request::url() }}?order=default"><span>全部排行</span></a>
                    </div>
                    <div class="nav-box {{ $request->order == 'isreal' ? 'active': ''}}">
                        <a href="{{ Request::url() }}?order=isreal"><span>已测实盘</span></a>
                    </div>
                </div>
                <div class="left-website hide">
                    @foreach($companties as $company)
                    <div class="left-website-content">
                        <div class="website-img">
                            <a href="{{ route('company.show',['company'=>$company])}}" target="_blank">
                                @if($company->is_real)
                                  <span class="label" style="background-color:#2BB351;">实盘</span>
                                @else
                                 <span class="label" style="background-color:#E45950;">待验证</span>
                                @endif
                                <img src="/storage/{{ $company->platform_logo }}" alt="{{ $company->platform_name }}">
                            </a>
                        </div>
                        <div class="website-introduction">
                            <h3><a href="{{ route('company.show',['company'=>$company])}}" target="_blank">
                                    <l class="company_name">{{ $company->platform_name }}</l>
                                    @if($company->is_real)
                                    <span class="showspan" style="background-color:#2BB351;">正常</span>
                                    @else
                                    <span style="background-color: rgb(241, 104, 12);" class="showspan">问题</span>
                                    @endif
                                </a>
                            </h3>
                            <p style="margin-top:5px;"><span>是否实盘：{{ $company->is_real ? '是' : '否'}}</span> &nbsp;&nbsp; <span>所在地区： {{ $company->area }} </span> &nbsp;&nbsp; <span>上线时间： {{ $company->obline_at }}</span></p>
                            <p class="numStr">综合评分：
                                @if($company->is_real)
                                <i class="str-active"></i>
                                <i class="str-active"></i>
                                <i class="str-active"></i>
                                <i class="str-active"></i>
                                <i class="str-active"></i>
                                @else
                                <i class="str"></i>
                                <i class="str"></i>
                                <i class="str"></i>
                                <i class="str"></i>
                                <i class="str"></i>
                                @endif
                            </p>
                        </div>
                        <div class="pos">
                            <span>{{ rand(3,999)}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="right-box">
                <p class="title"><span>实盘直达</span></p>
                <ul>
                    @foreach($companties->where('is_real',true) as $company)
                    <li>
                        <a href="{{ $company->platform_url }}" target="_black" rel="nofollow">
                            <img src="/storage/{{ $company->platform_logo }}" alt="{{ $company->platform_name }}">
                            <span class="company_namer">{{ $company->platform_name }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </dlv>
        <div class="warm">
            <div class="content">
                <span class="warmingtitle">风险提示：</span>根据证监会有关《关于整理整理违法从事证券事务活动的定见》，规定场外配资合同，均不具备法律效应。提高意识，谨防损失！
            </div>
        </div>
        <div style="height: 50px;"> </div>
    </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/list_pingtai.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/swiper.min.css') }}" rel="stylesheet">
@endsection
@section('scripts')
@endsection

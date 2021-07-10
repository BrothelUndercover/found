@extends('layouts.app')

@section('content')
<div class="new-wrap">
    <div class="wrap-box">
        <nav class="new-nav">
            <ul>
                {{-- <a href="/commentlist">
                    <li>热评</li>
                </a> --}}
               {{--  <a href="/complaintlist">
                    <li>曝光</li>
                </a> --}}
                <a href="{{ route('company.monitor')}}">
                    <li>监控</li>
                </a>
                <a href="{{ route('company.newest')}}">
                    <li class="active">最新</li>
                </a>
            </ul>
        </nav>
        <div class="new-content new-hide">
            <div class="monitor-box">
                <div class="monitor-head clearfix">
                    <span class="head-time">
                        07/10 </span>
                    <h3 class="title">
                        <i class="jing"></i> 信息皆为第三方公开数据，数据需自行查证，修改请提交收录修改。
                    </h3>
                </div>
                <ul>
                    @foreach($companies as $company)
                    <li class="clearfix">
                        <div class="left-time">
                            <i class="yuan"></i>
                            {{ $company->check_time }}</div>
                        <div class="monitor-right" style="min-width: 200px;">
                            <p><a href="{{ route('company.show',['company'=> $company->company->id ])}}" class="right-title2">{{ $company->company->platform_name }}</a>
                                <span class="{{ $company->is_business ? 'showgreen' : 'showorange'}}">{{ $company->is_business ? '有工商信息' : '没有查到工商信息'}}</span>
                                <span class="{{ $company->is_site ? 'showgreen' : 'showorange'}}">{{ $company->is_site ? '有查到网站备案信息' : '没有查到网站备案信息'}}</span>
                                <!--                 -->
                                <span class="{{ $company->status ? 'green' : 'red'}}">{{ $company->status ? '监管中': '待验证'}}</span> </p>
                                <span class="green">{{ $company->is_real ? "实盘": ''}}</span> </p>
                        </div>
                    </li>
                    @endforeach
                    <div class="loadmore">
                        <p onclick="return loadmore1(this);" id="loadmore1" data-page="1" data-type="1">加载更多</p>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/list_info.css') }}" rel="stylesheet">
@endsection
@section('scripts')
@endsection

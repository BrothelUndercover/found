@extends('layouts.app')

@section('content')
<div class="new-wrap">
    <div class="wrap-box">
        <nav class="new-nav">
            <ul>
          {{--       <a href="/commentlist">
                    <li>热评</li>
                </a>
                <a href="/complaintlist">
                    <li>曝光</li>
                </a> --}}
                <a href="{{ route('company.monitor')}}">
                    <li class="active">监控</li>
                </a>
                <a href="{{ route('company.newest')}}">
                    <li >最新</li>
                </a>
            </ul>
        </nav>
        <div class="new-content new-hide">
            <div class="monitor-box">
                <div class="monitor-head clearfix">
                    <span class="head-time">{{ date('m/d') }}</span>
                    <h3 class="title">
                        <i class="jing"></i> 实时监控平台动态(72小时内所有网址不能访问并未提示更换,自动转为停业平台)
                    </h3>
                </div>
                <ul>
                    @foreach($companies as $company)
                    <li class="clearfix">
                        <div class="left-time"> <i class="yuan"></i>{{ $company->created_at }}</div>
                        <div class="monitor-right">
                            <p><a href="{{ route('company.show',['company' => $company->company->id ])}}" class="right-title">{{ $company->company->platform_name }}</a>
                                @if($company->status)
                                <span style="color:green;">[200]：该平台网址正常打开</span>
                                @else
                                该平台网址不能打开,错误提示：<span style="color:red;">[0]：连接超时</span>
                                @endif
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- <ul class="pagination">
            <li><a href="/monitorshow?page=1">首页</a></li>
            <li><a href="/monitorshow?page=1">上一页</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="/monitorshow?page=2">2</a></li>
            <li><a href="/monitorshow?page=3">3</a></li>
            <li><a href="/monitorshow?page=4">4</a></li>
            <li><a href="/monitorshow?page=2">下一页</a></li>
            <li><a href="/monitorshow?page=622">末页</a></li>
            <li class="maxpageli"><a>共622页</a></li>
        </ul> --}}
    </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/list_info.css') }}" rel="stylesheet">
@endsection
@section('scripts')
@endsection

@extends('layouts.app')

@section('content')
<div class="new-wrap">
    <div class="wrap-box">
        <div class="wrap-left">
            <nav class="new-nav">
                <ul>
                    <a href="{{ route('company.comment')}}">
                    <li class="active">热评</li>
                </a>
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
                <ul class="reping">
                    <div class="company-box">
                        <div class="new-content new-hide">
                            <ul class="show5">
                                @foreach($comments as $comment)
                                <li>
                                    <div class="text-top clearfix">
                                        <div class="tl">
                                            <a href="#"><img src="/web/image/noheadimg.png"></a>
                                        </div>
                                        <div class="tz">
                                            <span class="address"><a href="#" style="color:#333;">{{ $comment->user->name }}</a></span>
                                            <span></span>
                                            <br>
                                            <p class="time">{{ $comment->created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        {{ $comment->content }}
                                    </div>
                                    <div class="ppc_plhf">
                                        <div class="text-dui ppc_plhf_left">
                                            <span>[评论对象]</span>
                                            <a href="{{ route('company.show',['company'=> $comment->company->id ])}}">{{ $comment->company->platform_name }}</a>
                                        </div>
                                        <div class="text-content ppc_plhf_right">
                                            <div class="reply-content">
                                                <div class="reply-box" id="reply-zan" onclick="return thumbsupthis(this);" data-id="720">
                                                    <img src="/web/image/zan.png">
                                                    <span>{{ rand(2,99) }}</span>
                                                </div>
                                                <div class="reply-box" id="reply-cai" onclick="return thumbsdthis(this);" data-id="720">
                                                    <img src="/web/image/cai.png">
                                                    <span>{{ rand(10,999) }}</span>
                                                </div>
                                               {{--  <div class="reply-box" id="huifu" onclick="return huifuthis(this);" data-id="720">
                                                    <img src="/web/image/hui.png">
                                                    回复
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </ul>
                <div class="loadmore" id="loadmore1">
                    {{-- <p onclick="return loadmore5(this);" data-page="1">加载更多</p> --}}
                    <ul class="pagination">
                        <li><a href="{{ $comments->previousPageUrl() }}">上一页</a></li>
                        <li><a href="{{ $comments->nextPageUrl() }}">下一页</a></li>
                        <li><a href="{{ $comments->url($comments->lastPage()) }}">末页</a></li>
                        <li class="maxpageli"><a>共{{ ceil($comments->total()/$comments->perPage()) }}页</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrap-right">
            <div class="right-box">
                <p class="title"><span>实盘直达</span></p>
                <ul>
                    @foreach($companies as $company)
                    <li>
                        <a href="{{ $company->platform_url }}" target="_black">
                            <img src="/storage/{{ $company->platform_logo }}">
                            <span class="company_name">{{ $company->platform_name}} </span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/list_info1.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/company_detail.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/list_pingtai.css') }}" rel="stylesheet">
@endsection
@section('scripts')
@endsection

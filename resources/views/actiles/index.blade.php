@extends('layouts.app')

@section('content')
<div class="new-wrap">
    <div class="wrap-box">
        <nav class="new-nav">
            <ul>
                <a href="{{ route('actile.list') }}">
                    <li class="{{ isset($request->group) ? '':'active'}}">最新行业文章</li>
                </a>
                @foreach($groups as $group)
                <a href="{{ route('actile.list',['group'=>$group->id]) }}">
                    <li class=" {{ $request->group == $group->id ? 'active': ''}}">{{ $group->title }}</li>
                </a>
                @endforeach
            </ul>
            {{-- <div class="fb">
                <a href="javascript:void(0);" onclick="return fabuthis();">我要发布</a>
            </div> --}}
        </nav>
        <div class="new-content new-hide">
            <ul id="showul">
                @foreach($news as $new)
                <li>
                    <a target="_blank" href="{{ route('actile.show',['new'=>$new])}}" class="head">
                        <img src="/storage/{{ $new->cover }}" alt="{{ $new->title }}">
                        <div class="date">{{ $new->created_at}}</div>
                        <h2>{{ $new->title }}</h2>
                        <div class="is">
                            <p style="overflow: hidden; display: -webkit-box;  -webkit-box-orient: vertical; -webkit-line-clamp: 2;">{{ ($new->mark) }}</p>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <ul class="pagination">
            <li><a href="{{ route('home')}}">首页</a></li>
            <li><a href="{{ $news->previousPageUrl() }}">上一页</a></li>
            <li><a href="{{ $news->nextPageUrl() }}">下一页</a></li>
            <li><a href="{{ $news->url($news->lastPage()) }}">末页</a></li>
            <li class="maxpageli"><a>共{{ ceil($news->total()/$news->perPage()) }}页</a></li>
            {{-- <li><a href="{{ route('')}}">首页</a></li>
            <li><a href="/newslist/2_1_0.html">上一页</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="/newslist/2_2_0.html">2</a></li>
            <li><a href="/newslist/2_3_0.html">3</a></li>
            <li><a href="/newslist/2_4_0.html">4</a></li>
            <li><a href="/newslist/2_2_0.html">下一页</a></li>
            <li><a href="/newslist/2_55_0.html">末页</a></li>
            <li class="maxpageli"><a>共55页</a></li> --}}
        </ul>
    </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/list_pingtai.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/new_list.css') }}" rel="stylesheet">
@endsection
@section('scripts')
@endsection

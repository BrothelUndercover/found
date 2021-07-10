@extends('layouts.app')

@section('content')
<div class="header">
    <div class="header-content">
        <div class="head-box">
            <div class="left-logo">
                <img src="/web/image/head-logo.png">
            </div>
            <div class="right-nav">
                <span><a href="{{ route('login')}}">登录/注册</a></span> </div>
        </div>
        <div class="content-h2">
            配配帮你查 投资更安全
        </div>
        <div class="content-nav">
        </div>
        <form class="iform">
            <input class="text" id="keyword" type="text" placeholder="输入平台全称、平台简称、公司名称、公司网址等">
            <ul class="searchul3">
            </ul>
            <input class="ibtn" readonly="" onclick="return search();">
        </form>
        <div class="hot">
            <div class="hot_title">
                <div class="hot_1">热门搜索</div>
            </div>
            <div class="hot_keys">
                <ul>
                    @foreach($companies->random(5) as $company)
                    <li><a href="{{ route('company.show',['company'=>$company])}}">{{ $company->platform_name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="platform-box">
            <a href="{{ route('company.list',['category'=>1])}}">
                <div class="platform-num">
                    收录平台：<span>1909</span>
                </div>
            </a>
            <a href="https://www.peipeicha.com/commentlist">
                <div class="platform-num">
                    用户评论：<span>8321</span>
                </div>
            </a>
            <a href="https://www.peipeicha.com/complaintlist/1.html">
                <div class="platform-num">
                    曝光平台：<span>362</span>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container-bg">
    <div class="container-box">
        <div class="company-box" id="content">
            <a target="_blank" href="{{ route('company.list',['category'=>1])}}?order=default">
                <div class="company">
                    <div class="img-logo img-logo5">
                    </div>
                    <div class="right-text">
                        <h2>配资平台 </h2>
                        <p>实盘配资平台排名查询</p>
                        <img src="/web/image/yice.png" class="yice">
                    </div>
                </div>
            </a>
            <a target="_blank" href="{{ route('company.list',['category'=>2])}}?order=default">
                <div class="company">
                    <div class="img-logo img-logo1">
                    </div>
                    <div class="right-text">
                        <h2>证券公司 </h2>
                        <p>国内证券公司排名查询</p>
                    </div>
                </div>
            </a>
            <a target="_blank" href="{{ route('company.list',['category'=>3])}}?order=default">
                <div class="company">
                    <div class="img-logo img-logo2">
                    </div>
                    <div class="right-text">
                        <h2>期货公司 </h2>
                        <p>国内期货公司排名查询</p>
                    </div>
                </div>
            </a>
            <a target="_blank" href="{{ route('company.list',['category'=>4])}}?order=default">
                <div class="company">
                    <div class="img-logo img-logo8">
                    </div>
                    <div class="right-text">
                        <h2>比特币资讯 </h2>
                        <p>数字货币区块链平台查询</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="bg">
        <div class="nav-box">
            <div class="left-nav">
                <div class="nav-title">
                    <li data-id="2" onclick="return changelistshow(this);" data-type="2" class="active">行业文章</li>
                    <a href="{{ route('actile.list') }}" class="more" id="more1">更多...</a>
                </div>
                <div class="new-text text-active" id="news1">
                    @foreach($news as $new)
                    <div class="left-text-box">
                        <div class="box-img">
                            <a href="{{ route('actile.show',['new'=> $new]) }}" target="_blank"> <img src="/storage/{{ $new->cover }}" alt="{{ $new->title }}"> </a>
                        </div>
                        <div class="box-right">
                            <a href="{{ route('actile.show',['new'=> $new]) }}" target="_blank">
                                <h2 class="newh3">{{ $new->title }}</h2>
                            </a>
                            <p class="newdiv" style="overflow: hidden; display: -webkit-box;  -webkit-box-orient: vertical; -webkit-line-clamp: 2;">{{ ($new->mark) }}</p>
                            <div class="bottom-label">
                                <div class="time fl">
                                    <img class="time-icon" src="web/image/cc1.png">
                                    <span>{{ $new->created_at->diffForHumans()}}</span>
                                </div>
                                <div class="fl look">
                                    <img src="web/image/vst.png">
                                    <span class="num">{{ rand(0,99999) }}</span>
                                    <img class="miss" src="web/image/miss.png" class="newimg">
                                    <span>{{ rand(0,999) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="loadmore">
                    {{-- p onclick="return loadmore1(this);" id="loadmore1" data-page="1" data-type="2">加载更多</p> --}}
                    {{-- {!! $news->appends(Request::except('page'))->render() !!} --}}
                    <ul class="pagination">
                        <li><a href="{{ route('home')}}">首页</a></li>
                        <li><a href="{{ $news->previousPageUrl() }}">上一页</a></li>
                        <li><a href="{{ $news->nextPageUrl() }}">下一页</a></li>
                        <li><a href="{{ $news->url($news->lastPage()) }}">末页</a></li>
                        <li class="maxpageli"><a>共{{ ceil($news->total()/$news->perPage()) }}页</a></li>
                    </ul>
                </div>
            </div>
            <div class="right-nav">
                <div class="right-new">
                    <div class="new-title">
                        <div class="tuijian">
                            <span>安全指数</span>
                        </div>
                    </div>
                    <div class="security-box">
                        <div class="box-border">
                            <div class="security-title">
                                <p><img src="web/image/xingxing.png"></p>
                                <p>平台名称</p>
                                <p>综合分</p>
                                <p>名次变动</p>
                            </div>
                            @foreach($companies->where('category',1) as $i => $company)
                            <div class="security-ranking">
                                <p class="one">{{ $i+1 }}</p>
                                <p class="two"><a href="{{ route('company.show',['company'=>$company])}}"><img src="/storage/{{ $company->platform_logo}}" alt="{{ $company->platform_name }}"></a></p>
                                <p class="three">10.00</p>
                                <p class="free top"> <span>{{ rand(1,9) }}</span><i></i></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="new-title">
                        <div class="tuijian">
                            <span>常用功能</span>
                        </div>
                    </div>
                    <div class="commonly-box">
                        <li>
                            <a href="javascript:void(0);" onclick="return fabuthis();">
                                <img class="icon one" src="web/image/sy1.png" alt="">
                                <span class="name">文章发布</span>
                                <i><img src="web/image/right-icon.png" alt=""></i>
                                <span class="right-name">注册即可发布</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="return commentplatform();">
                                <img class="icon" src="web/image/sy2.png" alt="">
                                <span class="name">评论平台</span>
                                <i><img src="web/image/right-icon.png" alt=""></i>
                                <span class="right-name">自由客观评论</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="return complaintthis();">
                                <img class="icon" src="web/image/sy3.png" alt="">
                                <span class="name">投诉曝光</span>
                                <i><img src="web/image/right-icon.png" alt=""></i>
                                <span class="right-name">客观反映事实</span>
                            </a>
                        </li>
                    </div>
                    <div class="right-new">
                        <div class="new-title">
                            <div class="tuijian">
                                <span>推荐阅读</span>
                            </div>
                        </div>
                        @foreach($news->random(2) as $new)
                        <div class="new-img">
                            <a href="{{ route('actile.show',['new'=>$new])}}" target="#"><img src="/storage/{{$new->cover}}"></a>
                        </div>
                        <div class="new-box">
                            <div class="small-box">
                                <a href="{{ route('actile.show',['new'=>$new])}}">
                                    <h3 class="one">{{ $new->title }}</h3>
                                </a>
                                <p>{{ $new->created_at->diffForHumans()}} </p>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('web/css/swiper.min.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/index.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/company_detail.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/new_list.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/list_pingtai.css') }}" rel="stylesheet">
@endsection
@section('scripts')
<script src="{{ asset('web/js/swiper.min.js') }}" defer></script>
<script src="{{ asset('web/js/template-web.js') }}" defer></script>
@endsection

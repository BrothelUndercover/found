@extends('layouts.app')

@section('content')
<div class="bg">
    <div class="container">
        <div class="bre">
            <a href="/"><span class="bre-nav">首页 > </span></a>
            <a href="{{ route('actile.list',['group'=>$new->newGroup->id])}}"><span class="bre-nav">{{$new->newGroup->title }} > </span></a>
            <span class="text">正文</span>
        </div>
        <div class="content">
            <div class="middle">
                <div class="middle-title">
                    <h1>{{ $new->title }}</h1>
                    <p class="title-bottom">
                        <img src="/web/image/cc1.png"> 时间：{{$new->created_at }} <img class="img" src="/web/image/cc2.png"> 标签: <a></a>
                        <span class="icon"><img src="/web/image/vst.png"><span id="viewnum">{{ $new->view }}</span></span>
                        <span class="icon"><img src="/web/image/miss.png"><span id="commentnum">2</span></span>
                        <span class="icon"><img src="/web/image/ai.jpg"><span id="thumbsupnum">0</span></span>
                    </p>
                    <div class="middle-text">
                        {!! $new->content !!}
                    </div>
                    <div class="love" id="love">
                        <p><a href="javascript:void(0);" onclick="return dianzan();"><img src="/web/image/content2.png">点赞<b>0</b></a></p>
                    </div>
                    <div class="ft">
                        <ul>
                            <li>上一篇：<a href="/article/hyqh/650.html">期货交易适合做中长线投资？</a></li>
                            <li>下一篇：<a href="/article/hygjs/652.html">如何借助均线读懂贵金属走势图？</a></li>
                        </ul>
                    </div>
                    <div class="smm">
                        <p>
                            配配查作为开放的资讯分享平台，所提供的所有资讯仅代表作者个人观点，与配配查平台立场无关，且不构成任何投资理财建议。如若转载请标注文章来源：配配查。</p>
                    </div>
                </div>
                <div class="company-box">
                    <div node-type="post-wrap-main" class="post-wrap-main">
                        <div class="post-wrap-border-t">
                            <div node-type="header-login" class="header-login">
                                <img src="/web/image/noheadimg.png" class="platformcomment">
                            </div>
                            <div node-type="post-wrap-border-t-l" class="post-wrap-border-t-l"></div>
                            <div node-type="post-wrap-border-t-r" class="post-wrap-border-t-r"></div>
                        </div>
                        <div class="wrap-area-w">
                            <div class="area-textarea-w">
                                <textarea node-type="textarea" id="comment" name="" placeholder="说两句吧..." class="textarea-fw textarea-bf"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="textarea-btn">
                        <a class="effect-w" href="javascript:void(0);">
                            <i class="uploading"></i>
                        </a>
                        <button class="btn-fw" onclick="return commantajax();"></button>
                    </div>
                    <div class="evaluate-text">
                        <ul class="showcomment">
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/28"><img src="/public/img/userheadimg/202101/16116300233671.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/28"><span class="address">博股通金888</span></a>
                                        <span class="city">甘肃-定西</span>
                                        <span class="time">2021-06-23 17:15:48</span>
                                    </div>
                                </div>
                                <div class="text-content">
                                    越多的充值方式就说明这个外汇平台越正规，并且也是越有实力的。 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="2610">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="2610">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="2610">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/22"><img src="/public/img/userheadimg/202101/16116312442649.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/22"><span class="address">A博量化</span></a>
                                        <span class="city">北京-市辖区</span>
                                        <span class="time">2021-06-23 17:15:48</span>
                                    </div>
                                </div>
                                <div class="text-content">
                                    正规外汇平台的充值方式是非常重要的，一般来说如果正规平台是不好的话那么这些充值方式肯定会被支付方所限制的。 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="2609">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="2609">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="2609">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="loadmore">
                        <p onclick="return loadmore1(this);" data-id="651" data-page="1">加载更多</p>
                    </div>
                </div>
            </div>
            <div class="right-box">
                <div class="c-y-1">
                    <div class="pic">
                        <a href="/userdetail/500" target="_blank">
                            <img src="/public/img/platformhead/202105/16220940992347.jpg">
                            <em></em>
                        </a>
                    </div>
                    <div class="userdetailname">
                        <h2><a href="/userdetail/500">股海牛舰</a></h2>
                    </div>
                    <ul class="userdetailnum">
                        <li>
                            <h3 id="owmerfollownum">0</h3>
                            <p>关注</p>
                        </li>
                        <li>
                            <h3 id="owmerfansnum">0</h3>
                            <p>粉丝</p>
                        </li>
                        <li>
                            <h3 id="owmerthumbsupnum">0</h3>
                            <p>赞同</p>
                        </li>
                        <li>
                            <h3 id="owmeraffectnum">8</h3>
                            <p>影响力</p>
                        </li>
                    </ul>
                    <div class="more-two">
                        <a href="/userdetail/500" target="_blank">主页</a>
                        <a onclick="return followplatform(this);" data-id="500">关注</a>
                    </div>
                </div>
                <div class="new-title">
                    <div class="tuijian">
                        <span>安全指数</span>
                    </div>
                </div>
                <div class="security-box">
                    <div class="box-border">
                        <div class="security-title">
                            <p><img src="/web/image/xingxing.png"></p>
                            <p>平台名称</p>
                            <p>综合分</p>
                            <p>名次变动</p>
                        </div>
                        <div class="security-ranking">
                            <p class="one">1</p>
                            <p class="two"><a href="/platforminfo/1970.html"><img src="/public/img/platformhead/202104/16196005427087.jpg"></a> &nbsp;<a href="/platforminfo/1970.html">阳德网</a></p>
                            <p class="three">10.00</p>
                            <p class="free top"> <span>1</span><i></i></p>
                        </div>
                    </div>
                </div>
                <div class="c-y-3">
                    <h2 class="newtitle">推荐阅读<em></em></h2>
                    <ul>
                        <li><a href="/article/hywh/248.html" target="_blank">外汇投资安全保障注意事项！</a></li>
                        <li><a href="/article/hygjs/269.html" target="_blank">贵金属投资安全保障注意事项！</a></li>
                        <li><a href="/article/hypz/251.html" target="_blank">配资投资安全保障注意事项!</a></li>
                        <li><a href="/article/hyqh/281.html" target="_blank">期货投资安全保障注意事项!</a></li>
                        <li><a href="/article/hyszb/252.html" target="_blank">数字货币投资安全保障注意事项！</a></li>
                        <li><a href="/article/hyzq/264.html" target="_blank">证券投资安全保障注意事项!</a></li>
                    </ul>
                </div>
                <div class="right-new">
                    <div class="new-title">
                        <h2 class="newtitle" style="height: 51px;line-height: 51px;font-size: 18px;font-weight: normal;padding-left: 15px;position: relative;color: #333;padding-bottom: 0px;">热点关注<em style="width: 4px;height: 20px;background: #2e78f6;position: absolute;top: 16px;left: 0;"></em></h2>
                        <!--   <div class="tuijian">
                        <span class="c-y-3-title">猜你喜欢</span>
                    </div> -->
                    </div>
                    <div class="new-img">
                        <a href="/article/hyzq/512.html" target="#"><img src="/web/image/article_headimg/202105/16202659047229.jpg"></a>
                    </div>
                    <div class="new-box">
                        <div class="small-box">
                            <a href="/article/hyzq/512.html">
                                <h3 class="one">一季度基金收益率为何首尾两者相差这么多？</h3>
                            </a>
                            <p>
                                2021-05-03 </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
<style type="text/css">
.record-dia {
    margin-top: 10px;
    padding: 0 20px;
    height: 630px;
    overflow-y: scroll;
}

.dia-box li {
    display: flex;
    padding: 10px 0;
    border-bottom: 1px dashed #ccc;
    justify-content: space-between;
}

.dia-box li .title {
    width: 85%;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.tanchu {
    position: fixed;
    left: 35%;
    top: 20%;
    z-index: 9999;
}

.zhe {
    top: 0;
    left: 0;
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 999;
    background-color: black;
    opacity: 0.3;
}

.iknow {
    position: relative;
    top: 430px;
    left: -430px;
}
</style>
<link href="{{ asset('web/css/article_article.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/base2.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/company_detail.css') }}" rel="stylesheet">
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdn.bootcdn.net/ajax/libs/layer/3.1.1/layer.js"></script>
@endsection

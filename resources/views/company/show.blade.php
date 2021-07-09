@extends('layouts.app')

@section('content')
<div class="detail-bg">
    <div class="wrap detail-wrap">
        <div class="detail-head">
            <div class="head-left">
                @if($company->is_real)
                <div class="platformhead" style="background-color:#2BB351;color:white;width: 60px;text-align: center;height: 15px;position: absolute;padding: 1px 5px;border-radius: 5px 0 0 0;">实盘</div>
                @else
                 <div class="platformhead" style="background-color:#E45950;color:white;width: 60px;text-align: center;height: 15px;position: absolute;padding: 1px 5px;border-radius: 5px 0 0 0;">待验证</div>
                 @endif
                <img style="border: 3px solid #2BB351;border-radius: 10px;" class="name" src="/storage/{{ $company->platform_logo }}" alt="{{ $company->platform_name }}">
                <div class="gz">
                    <p>关注量：<span id="guanzhunum1">994</span></p>
                </div>
                <div class="right-follow">
                    <li class="guan" onclick="return followplatform();">
                        <div class="follow-img guan">
                        </div>
                        <p id="followthis">关注</p>
                    </li>
                    <li class="cuo">
                        <div class="follow-img jiu">
                        </div>
                        <p>纠错</p>
                    </li>
                    <li class="shu">
                        <div class="follow-img tou">
                        </div>
                        <p>投诉</p>
                    </li>
                </div>
            </div>
            <div class="head-right">
                <table class="com">
                    <tbody>
                        <tr>
                            <td class="platformnametitle">平台名称</td>
                            <td colspan="3" class="platformname">{{ $company->platform_name }}
                                @if($company->is_real)
                               <span class="zheng">正常</span>
                               @else
                               <span class="wen">问题</span>
                               @endif
                            </td>
                        </tr>
                        <tr>
                            <td>网站</td>
                            <td style="position:relative;"><a href=""></a>{{ $company->platform_url }}
                                <a rel="nofollow" class="fang" href="javascript:void(0);" onclick="window.location.href='{{$company->platform_url}}'"><img class="hrefimg" src="/web/image/fang-icon.png">访问官网</a>
                            </td>
                            <td>服务项目</td>
                            <td>{{ $company->service_project ??'---' }}</td>
                        </tr>
                        <tr>
                            <td>是否实盘</td>
                            @if($company->is_real)
                            <td>是<span class="tong"><img src='/web/image/tong-icon.png'>已验证</span><a style="color:#0399f7;text-decoration:underline;margin-left:4px;" id="look-yan">查看验证记录</a> </td>
                            @else
                            <td> <span style="color:orange;">待验证</span> <a class="ti" href="javascript:void(0);" onclick="return submitfile();"><img src="/web/image/ti-icon.png" class="hrefimg2">提交资料</a></td>
                            @endif
                            <td>服务模式</td>
                            <td>{{ $company->service_mode }}</td>
                        </tr>
                        <tr>
                            <td>所在地区</td>
                            <td>{{ $company->area ?? '---' }}</td>
                            <td>联系地址</td>
                            <td>{{ $compay->company_address ?? '----' }}</td>
                        </tr>
                        <tr>
                            <td>上线时间</td>
                            <td>{{ $company->obline_at ?? '---' }}</td>
                            <td>联系电话</td>
                            <td>{{ $company->company_phone ?? '---'}}</td>
                        </tr>
                        <tr>
                            <td>平台简介</td>
                            <td colspan="3" class="platform_jianjie">{{ $company->platform_introduce ?? '-----------'}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="content-box ">
            <div class="content-left">
                <div class="company-nav">
                    <ul>
                        <li class="active" data-id="1">平台背景</li>
                        <li data-id="2">风险提示 <span class="ppc_plnumo">0</span></li>
                        <li data-id="3">用户评论 <span class="ppc_plnum">29</span></li>
                        <li data-id="4">投诉处理 <span class="ppc_plnumo">0</span></li>
                    </ul>
                </div>
                <div class="company-box company-hide">
                    <h1><span>工商信息</span></h1>
                    @if($company->company_name)
                      @include('company._business',['company'=> $company])
                    @else
                    <h2 class="nogongshang">
                        没有工商备案信息
                    </h2>
                    @endif
                    <div class="record">
                        <h1><span>网站备案</span></h1>
                        @if($company->record_chargeperson)
                         @include('company._site',['company'=> $company])
                        @else
                        <h2 class="noweb">
                            没有网站备案信息
                        </h2>
                        @endif

                    </div>
                    <div class="supervise">
                        <h1><span>监管机构</span></h1>
                        @if($company->supervision_name)
                          @include('company._supervison',['company'=> $company])
                        @else
                         <div class="supervise-box">
                            <ul>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="company-box">
                    <div class="risk-box">
                        <ul>
                        </ul>
                    </div>
                </div>
                <div class="company-box">
                    <div node-type="post-wrap-main" class="post-wrap-main">
                        <div class="post-wrap-border-t">
                            <div node-type="header-login" class="header-login">
                                评论
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
                        <a class="effect-w" href="javascript:void(0);" onclick="return changeimg();">
                            <i class="uploading"></i>
                        </a>
                        <input type="file" id="file4" multiple style="display:none;" onchange="return FileUpload_onselect6();">
                        <button class="btn-fw" onclick="return commantajax();"></button>
                    </div>
                    <div class="evaluate-text">
                        <ul class="show5">
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/913"><img src="/public/img/platformhead/202106/16248448006677.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/913">
                                            <span class="address">大楼创业者</span>
                                        </a>
                                        <span class="city">广东-广州</span>
                                        <span class="time">2021-06-28</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">先注册体验一下感觉还可以 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="643">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="643">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="643">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/716"><img src="/public/img/platformhead/202106/16232871588663.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/716">
                                            <span class="address">这里的股市静悄悄</span>
                                        </a>
                                        <span class="city">吉林-长春</span>
                                        <span class="time">2021-06-10</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">之前用过很多家，公赢网确实值得一夸，服务很贴心，有什么问题都能及时解决的，收费也不贵，还有很多优惠活动 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="551">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="551">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="551">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/682"><img src="/public/img/platformhead/202106/16230280327935.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/682">
                                            <span class="address">lin123456</span>
                                        </a>
                                        <span class="city">辽宁-沈阳</span>
                                        <span class="time">2021-06-07</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">好评，亲测实盘，提现快，重要的是超短有两天免息，单票仓位高。 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="531">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="531">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="531">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/600"><img src="/public/img/platformhead/202106/16225137453778.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/600">
                                            <span class="address">佛祖包邮你们</span>
                                        </a>
                                        <span class="city">浙江-湖州</span>
                                        <span class="time">2021-06-01</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">今天我特意去注册了下，还有客服回访 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="487">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="487">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="487">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/540"><img src="/public/img/platformhead/202105/16223609394695.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/540">
                                            <span class="address">仓经常空</span>
                                        </a>
                                        <span class="city">山西-大同</span>
                                        <span class="time">2021-05-30</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">小资金试了一下，总体还行，应该是实盘，充值，配资，提现都比较快，真实感受，供参考，不喜勿喷！ <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="476">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="476">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="476">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/488"><img src="/public/img/platformhead/202105/16219943454726.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/488">
                                            <span class="address">白忙呼</span>
                                        </a>
                                        <span class="city">辽宁-沈阳</span>
                                        <span class="time">2021-05-26</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">公司服务很专业，客服都是二十四小时在线的，我大半夜遇到问题他们都及时解决掉问题，挺靠谱的。 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="448">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="448">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="448">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/476"><img src="/public/img/platformhead/202105/16219062444423.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/476">
                                            <span class="address">赚一分也跑</span>
                                        </a>
                                        <span class="city">天津-天津</span>
                                        <span class="time">2021-05-25</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">真的是实盘 有交割单 还手动测试了一波！ 靠谱了 这下稳了稳了 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="442">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="442">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="442">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/461"><img src="/public/img/platformhead/202105/16218183265520.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/461">
                                            <span class="address">坚持必胜</span>
                                        </a>
                                        <span class="city">重庆-重庆</span>
                                        <span class="time">2021-05-24</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">实盘是我最看重的，遇到了一点小的问题，联系微信客服也很快解决了，提现速度很快 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="428">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="428">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="428">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/429"><img src="/public/img/platformhead/202105/16215758908536.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/429">
                                            <span class="address">深街赌徒</span>
                                        </a>
                                        <span class="city">陕西-西安</span>
                                        <span class="time">2021-05-21</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">小资金试了下 是实盘 出入金体验都不错 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="409">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="409">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="409">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="text-top clearfix">
                                    <div class="tl">
                                        <a href="/userdetail/418"><img src="/public/img/platformhead/202105/16214754893917.jpg"></a>
                                    </div>
                                    <div class="tz">
                                        <a href="/userdetail/418">
                                            <span class="address">股友算盘</span>
                                        </a>
                                        <span class="city">浙江-丽水</span>
                                        <span class="time">2021-05-20</span>
                                        <!-- <img src="/web/image/xl2.png"> -->
                                    </div>
                                    <div class="picture-img">
                                    </div>
                                </div>
                                <div class="text-content">最近的行情一般般，这个盘子是实盘，等行情好一点入金操作。 <div class="reply-content">
                                        <div class="reply-box" onclick="return thumbsupthis(this);" data-id="405">
                                            <img src="/web/image/zan.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return thumbsdthis(this);" data-id="405">
                                            <img src="/web/image/cai.png">
                                            <span>0</span>
                                        </div>
                                        <div class="reply-box" onclick="return huifuthis(this);" data-id="405">
                                            <img src="/web/image/hui.png">
                                            回复
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="loadmore" id="loadmore5" style="display: none;">
                        <p onclick="return loadmore5(this);" data-page="1">加载更多</p>
                    </div>
                </div>
                <div class="company-box complaintshow">
                </div>
                <div class="loadmore" id="loadmore3" style="display: none;">
                    <p onclick="return loadmore3(this);" data-page="1">加载更多</p>
                </div>
            </div>
            <div class="content-right platformright1">
                <div class="echart-box" id="echart-box" _echarts_instance_="ec_1625480728500" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; width: 300px; height: 350px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="300" height="350" style="position: absolute; left: 0px; top: 0px; width: 300px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                <div class="echart-xin platformright2">
                    <li>
                        <span>10.00</span>
                        <p>平台指数</p>
                    </li>
                    <li>
                        <span>10.00</span>
                        <p>软件指数</p>
                    </li>
                    <li>
                        <span>10.00</span>
                        <p>风控指数</p>
                    </li>
                    <li>
                        <span>10.00</span>
                        <p>信用指数</p>
                    </li>
                </div>
                <div class="tuijian"></div>
                <div class="right-new">
                    <h1>
                        <span>推荐阅读</span>
                    </h1>
                </div>
                <div class="new-content">
                    <ul>
                        <li>
                            <a href="/article/hyszb/252.html">
                                <img src="/public/img/article_headimg/202103/16159680412135.jpg">
                                <p>数字货币投资安全保障注意事项！</p>
                            </a>
                        </li>
                        <li>
                            <a href="/article/hywh/248.html">
                                <img src="/public/img/article_headimg/202103/16159644576996.jpg">
                                <p>外汇投资安全保障注意事项！</p>
                            </a>
                        </li>
                    </ul>
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
    overflow-y:scroll;
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
.tanchu{
    position: fixed;
    left: 35%;
    top:20%;
    z-index: 9999;
}
.zhe{
    top: 0;
    left: 0;
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 999;
    background-color: black;
    opacity: 0.3;
}
.iknow{
    position: relative;
    top:430px;
    left: -430px;
}
</style>
<link href="{{ asset('web/css/list_pingtai.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/company_detail.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://www.layuicdn.com/layui/css/layui.css">
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdn.bootcdn.net/ajax/libs/layer/3.1.1/layer.js"></script>
<script src="https://www.peipeicha.com/web/js/echarts.js"></script>
<script>
      //查看验证记录
         $('#look-yan').click(function() {
            layer.open({
            type: 1,
            title: '验证记录',
            maxmin: true,
            area: ['1000px', '700px'],
            content: '<div class="record-dia"><div class="dia-box"><ul><a onclick="return yanzhengshow(180);"><li ><p class="title">2021年7月7日满盈网实盘验证记录</p><p>2021-07-07</p></li></a><a onclick="return yanzhengshow(173);"><li ><p class="title">2021年7月5日满盈网实盘验证记录</p><p>2021-07-05</p></li></a><a onclick="return yanzhengshow(165);"><li ><p class="title">2021年7月1日满盈网实盘验证记录</p><p>2021-07-01</p></li></a><a onclick="return yanzhengshow(149);"><li ><p class="title">2021年6月21日满盈网实盘验证记录</p><p>2021-06-21</p></li></a><a onclick="return yanzhengshow(142);"><li ><p class="title">2021年6月16日满盈网实盘验证记录</p><p>2021-06-16</p></li></a><a onclick="return yanzhengshow(134);"><li ><p class="title">2021年6月11日满盈网实盘验证记录</p><p>2021-06-11</p></li></a><a onclick="return yanzhengshow(126);"><li ><p class="title">2021年6月7日满盈网实盘验证记录</p><p>2021-06-07</p></li></a><a onclick="return yanzhengshow(117);"><li ><p class="title">2021年5月28日满盈网实盘验证记录</p><p>2021-05-28</p></li></a><a onclick="return yanzhengshow(109);"><li ><p class="title">2021年5月24日满盈网实盘验证记录</p><p>2021-05-24</p></li></a><a onclick="return yanzhengshow(101);"><li ><p class="title">2021年5月20日满盈网实盘验证记录</p><p>2021-05-20</p></li></a><a onclick="return yanzhengshow(94);"><li ><p class="title">2021年5月17日满盈网实盘验证记录</p><p>2021-05-17</p></li></a><a onclick="return yanzhengshow(89);"><li ><p class="title">2021年5月13日满盈网实盘验证记录</p><p>2021-05-13</p></li></a><a onclick="return yanzhengshow(82);"><li ><p class="title">2021年5月11日满盈网实盘验证记录</p><p>2021-05-11</p></li></a><a onclick="return yanzhengshow(78);"><li ><p class="title">2021年5月6日满盈网实盘验证记录</p><p>2021-05-06</p></li></a><a onclick="return yanzhengshow(68);"><li ><p class="title">2021年4月27日满盈网实盘验证记录</p><p>2021-04-27</p></li></a><a onclick="return yanzhengshow(63);"><li ><p class="title">2021年4月23日满盈网实盘验证记录</p><p>2021-04-23</p></li></a><a onclick="return yanzhengshow(55);"><li ><p class="title">2021年4月20日满盈网实盘验证记录</p><p>2021-04-20</p></li></a><a onclick="return yanzhengshow(50);"><li ><p class="title">2021年4月14日满盈网实盘验证记录</p><p>2021-04-14</p></li></a><a onclick="return yanzhengshow(43);"><li ><p class="title">2021年4月12日满盈网实盘验证记录</p><p>2021-04-12</p></li></a><a onclick="return yanzhengshow(36);"><li ><p class="title">2021年4月9日满盈网实盘验证记录</p><p>2021-04-09</p></li></a><a onclick="return yanzhengshow(29);"><li ><p class="title">2021年4月7日满盈网实盘验证记录</p><p>2021-04-07</p></li></a><a onclick="return yanzhengshow(16);"><li ><p class="title">2021年3月30日满盈网实盘验证记录</p><p>2021-03-30</p></li></a><a onclick="return yanzhengshow(9);"><li ><p class="title">2021年3月29日满盈网实盘验证记录</p><p>2021-03-29</p></li></a><a onclick="return yanzhengshow(1);"><li ><p class="title">2021年3月26日满盈网实盘验证记录</p><p>2021-03-26</p></li></a></ul></div></div>',
            end: function(){
              layer.tips('Hi', '#about', {tips: 1})
            }
            });

        })

         function yanzhengshow(id){
               layer.open({
                  type: 2,
                  shade: false,
                  title:"验证记录详情",
                  area: ['900px','600px'],
                  maxmin: true,
                  content:"https://www.peipeicha.com/yanzhenginfo?id=180",
                  zIndex: layer.zIndex, //重点1
                  cancel: function(index,layero){

                  },
                  success: function(layero,index){

                  }
            })
         }
</script>
@endsection

@extends('layouts.app')

@section('content')
<div class="user-bg">
    <div class="wrap">
        <div class="user-nav">
            <a href="/">首页 </a> <span> > </span>
            <a href="#">用户中心</a>
        </div>
        <div class="user-content">
            <div class="content-left">
                <div class="left-user">
                    <div class="header-img">
                        <a href="/web/index/nickname"><img src="/web/image/noheadimg.png"></a>
                    </div>
                    <h2><a href="/web/index/nickname">配配查655717</a><img src="/web/image/user_left4.png"></h2>
                    <div class="type">
                        &nbsp;&nbsp;<img src="/web/image/content7.png">
                        未入驻企业
                    </div>
                    <div class="apply">
                        <a href="/web/index/platformapplyshow">修改展业权限</a>
                    </div>
                </div>
                <div class="header-title">
                    <img src="/web/image/user_left1.png">
                    <span>管理</span>
                </div>
                <div class="guanLi-box content-btn">
                    <ul style="position: relative;">
                        <a href="/web/index/risk_warming">
                            <li>风险提示</li>
                        </a>
                        <a href="/web/index/user_content">
                            <li>内容管理</li>
                        </a>
                        <a href="/web/index/privateletter">
                            <li>私信管理</li>
                        </a>
                        <a href="/web/index/commentcheck">
                            <li>互动管理</li>
                        </a>
                        <a href="/web/index/myfollowshow">
                            <li>我的关注</li>
                        </a>
                    </ul>
                </div>
                <div class="header-title">
                    <img src="/web/image/user_left2.png">
                    <span>设置</span>
                </div>
                <div class="guanLi-box set-btn">
                    <ul>
                        <a href="/web/index/mycard">
                            <li>名片信息</li>
                        </a>
                        <a href="/web/index/nickname">
                            <li>昵称头像</li>
                        </a>
                        <a href="/web/index/mypassword">
                            <li>密码修改</li>
                        </a>
                    </ul>
                </div>
                <div class="header-title">
                    <img src="/web/image/user_left3.png">
                    <span>客服</span>
                </div>
                <div class="guanLi-box kefu-btn">
                    <ul>
                        <a href="/web/index/platformapplyshow">
                            <li>平台入驻</li>
                        </a>
                        <a href="/web/index/feedback">
                            <li>在线反馈</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="content-right">
                <div class=" user-big-box">
                    <div class="user-effect">
                        <li>
                            <h4>0</h4>
                            <p>影响力</p>
                        </li>
                        <li>
                            <h4>0</h4>
                            <p>浏览量</p>
                        </li>
                        <li>
                            <h4>0</h4>
                            <p>粉丝</p>
                        </li>
                        <li>
                            <h4>0</h4>
                            <p>赞同</p>
                        </li>
                    </div>
                    <article class="new-total">
                        <p class="total-name">常见入口</p>
                        <div class="total-box">
                            <a href="/publish" target="_black">
                                <li>
                                    <img src="/web/image/user_right_ico1.png">
                                    <span>发布新闻</span>
                                </li>
                            </a>
                            <a href="javascript:void(0);" onclick="return commentplatform();">
                                <li>
                                    <img src="/web/image/user_right_ico4.png">
                                    <span>我要评论</span>
                                </li>
                            </a>
                            <a href="javascript:void(0);" onclick="return complaintthis();">
                                <li>
                                    <img src="/web/image/user_right_ico6.png">
                                    <span>投诉曝光</span>
                                </li>
                            </a>
                        </div>
                        <div class="my-follow">
                            <span>我的关注</span>
                        </div>
                        <div class="left-website show1">
                        </div>
                    </article>
                </div>
                <p class="more" onclick="return loadmore(this);" data-page="1" data-typeid="1">加载更多</p>
            </div>
        </div>
    </div>
</div>
<script>
function complaintthis() {
    layer.open({
        type: 1,
        title: '投诉',
        maxmin: true,
        area: ['800px', '780px'],
        content: ` <div class="complaint-content complaint-content1">
                <div class="input-wrap is-check mb20">
                    <label>投诉对象</label>
                    <input class="pr34" id="agent" name="platform" placeholder="请输入投诉平台名称" type="text" onkeyup="return getthisli(this);" >
                    <ul class="searchul2" style="height: auto;display:none;">

                    </ul>
                </div>
                <div class="input-wrap ask is-check mb20">
                    <label>投诉要求</label>
                    <input class="pr34" placeholder="请输入投诉要求" id="require" type="text" name="complaint_ordered">
                </div>
                <div class="input-wrap mb40">
                    <label>涉诉金额</label>
                    <input style="width: 150px;" id="money" type="number" name="amount_involved">
                    <i class="money-text">元</i>
                </div>
                <div class="input-wrap is-check mb40">
                    <label>投诉标题</label>
                    <input placeholder="概括核心问题，最好包含商家名以便为您解决(最多40个字）" id="title" type="text" name="title">
                </div>
                <div class="input-wrap is-check">
                    <label>投诉内容</label>
                    <textarea placeholder="请您依据实际情况详细描述投诉事由（不少于20字）。禁止发布违反法律、行政法规及不文明内容。捏造事实、诬陷诽谤他人、泄露他人隐私的投诉单有可能被驳回。" id="content2" name="content"></textarea>
                </div>
                <div class="input-wrap mb20" style="margin-top: 10px;">
                    <label>图片</label>
                    <div class="y-wx" style="margin-left:90px;">
                        <div class="div">
                            <!-- <img class="img" id="img" src="/web/image/viewpoint.png" alt="上传图片"> -->
                            <input name="wx" id="file" type="file" name="dile" multiple  size="40" value="" onchange="FileUpload_onselect();">
                        </div>
                        <div class="txt" style="padding:10px;margin-top:15px;">可以上存截图等图片最多5张图片<br ><br >格式为JPG、PNG、GIF</div>
                    </div>
                </div>
                <div class="input-wrap mb20" style="display:none;" id="imgsshow">

                </div>


                <div class="complaint-submit-btn" onclick="return submit();">提交</div>
            </div>`,
        end: function() {
            layer.tips('Hi', '#about', { tips: 1 })
        }
    });

};

function getthisli(dom) {
    var keyword = $("#agent").val();
    $(dom).next().children(".showli").remove();
    var _data = {
        "keyword": keyword,
    }
    $.ajax({
        data: _data,
        dataType: "json",
        url: '/getplatformlist',
        type: "POST",
        success: function(J) {
            if (J.code == 2) {
                layer.msg(J.msg);
            } else if (J.code == 1) {
                var str = '';
                for (var i = 0; i < J.data.length; i++) {
                    str += '<li class="showli" onclick="return clickthis6(this);">' + J.data[i].company_all_name + '</li>';
                }
                $(dom).next().append(str);
                $(".searchul2").css('display', "");
            }
        }
    })
}

function clickthis6(dom) {
    var thisval = $(dom).html();
    $("#agent").val(thisval);
    $(".searchul2").css('display', "none");
}

function FileUpload_onselect() {
    $(".imgsshownow").remove();
    if ($("#file")[0].files.length > 5) {
        layer.msg('最多只能上传5个图片');
    }
    var filenum = $("#file")[0].files.length;
    for (var i = 0; i < filenum; i++) {
        var file = $("#file")[0].files[i];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function(even) {
            var str = '';
            $('#imgsshow').css("display", "");
            str += ' <img src="' + even.currentTarget.result + '" class="imgsshownow" >';
            $("#imgsshow").append(str);
        }
    }
}

function submit() {
    var formData = new FormData();
    var file = new Array();
    var filenum = $("#file")[0].files.length;
    for (var i = 0; i < filenum; i++) {
        formData.append("file[]", $("#file")[0].files[i]);
    }
    var platform = $("#agent").val();
    var require = $("#require").val();
    var money = $("#money").val();
    var title = $("#title").val();
    var content = $("#content2").val();
    formData.append("platform", platform);
    formData.append("require", require);
    formData.append("money", money);
    formData.append("title", title);
    formData.append("content", content);
    $.ajax({
        cache: false,
        type: "POST",
        dataType: "json",
        data: formData,
        async: false,
        contentType: false,
        processData: false,
        url: '/web/index/complainthandle',
        success: function(J) {
            if (J.code == 2) {
                layer.msg(J.msg);
            } else if (J.code == 1) {
                layer.msg('提交成功，请等待审核...');
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
            }
        }
    })

}

function commentplatform() {
    layer.open({
        type: 1,
        title: '评论平台',
        maxmin: true,
        area: ['800px', '680px'],
        content: ` <div class="complaint-content complaint-content1">
                <div class="input-wrap is-check mb20">
                    <label>评论对象</label>
                    <input class="pr34" id="agent2" name="platform" placeholder="请输入投诉平台名称" type="text" onkeyup="return getthisli2(this);" >
                    <ul class="searchul2" style="height: auto;display:none;">

                    </ul>
                </div>
                <div class="input-wrap is-check">
                    <label>评论内容</label>
                    <textarea placeholder="请您依据实际情况详细描述投诉事由（不少于20字）。禁止发布违反法律、行政法规及不文明内容。捏造事实、诬陷诽谤他人、泄露他人隐私的投诉单有可能被驳回。" id="content4" name="content"></textarea>
                </div>
                <div class="input-wrap mb20" style="margin-top: 10px;">
                    <label>图片</label>
                    <div class="y-wx" style="margin-left:90px;">
                        <div class="div">
                            <!-- <img class="img" id="img" src="/web/image/viewpoint.png" alt="上传图片"> -->
                            <input name="wx" id="file2" type="file" name="dile" multiple  size="40" value="" onchange="FileUpload_onselect2();">
                        </div>
                        <div class="txt" style="margin-top:20px;">可以上存截图等图片最多5张图片<br>格式为JPG、PNG、GIF</div>
                    </div>
                </div>
                <div class="input-wrap mb20" style="display:none;margin-left:90px;" id="imgsshow2">

                </div>
                <div class="complaint-submit-btn" onclick="return submitcomment();" style="margin-top:30px;">提交</div>
            </div>`,
        end: function() {
            layer.tips('Hi', '#about', { tips: 1 })
        }
    });
}

function FileUpload_onselect2() {
    $(".imgsshow2").remove();
    if ($("#file2")[0].files.length > 5) {
        layer.msg('最多只能上传5个图片');
    }
    var filenum = $("#file2")[0].files.length;
    for (var i = 0; i < filenum; i++) {
        var file = $("#file2")[0].files[i];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function(even) {
            var str = '';
            $('#imgsshow2').css("display", "");
            str += ' <img src="' + even.currentTarget.result + '" class="imgsshow2" >';
            $("#imgsshow2").append(str);
        }
    }
}

function submitcomment() {
    var formData = new FormData();
    var platform = $("#agent2").val();
    var content = $("#content4").val();
    var file = new Array();
    var filenum = $("#file2")[0].files.length;
    if (filenum > 5) {
        layer.msg("文件上传数量不能超过5个");
    }
    for (var i = 0; i < filenum; i++) {
        formData.append("file[]", $("#file2")[0].files[i]);
    }
    formData.append("platform", platform);
    formData.append("content", content);
    $.ajax({
        cache: false,
        type: "POST",
        dataType: "json",
        data: formData,
        async: false,
        contentType: false,
        processData: false,
        url: '/platformcomment',
        success: function(J) {
            if (J.code == 2) {
                layer.msg(J.msg);
            } else if (J.code == 1) {
                layer.msg('评论成功，请等待审核');
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
            }
        }
    })
}

function getthisli2(dom) {
    var keyword = $("#agent2").val();
    $(dom).next().children(".showli").remove();
    var _data = {
        "keyword": keyword,
    }
    $.ajax({
        data: _data,
        dataType: "json",
        url: '/getplatformlist',
        type: "POST",
        success: function(J) {
            if (J.code == 2) {
                layer.msg(J.msg);
            } else if (J.code == 1) {
                var str = '';
                for (var i = 0; i < J.data.length; i++) {
                    str += '<li class="showli" onclick="return clickthis2(this);">' + J.data[i].company_all_name + '</li>';
                }
                $(dom).next().append(str);
                $(".searchul2").css('display', "");
            }
        }
    })
}

function clickthis2(dom) {
    var thisval = $(dom).html();
    $("#agent2").val(thisval);
    $(".searchul2").css('display', "none");
}





$(function() {
    $('.login-nav h3').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        $('.password-box').eq($(this).index()).addClass('hide').siblings().removeClass('hide');
    })
    $('.content-btn li').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        $('.user-big-box').hide()
        $('.right-box').eq($(this).index()).addClass('hide').siblings().removeClass('hide');
        $('.set-up').addClass('set-guan')
        $('.set-up').removeClass('set-hide')
        $('.set-btn li').removeClass('active')
        $('.kefu-btn li').removeClass('active')

    })
    $('.set-btn li').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        $('.user-big-box').hide()
        $('.right-box').addClass('guan')
        $('.set-up').eq($(this).index()).addClass('set-hide').siblings().removeClass('set-hide');
        $('.right-box').removeClass('hide')
        $('.content-btn li').removeClass('active')
        $('.kefu-btn li').removeClass('active')
    })

    $('.kefu-btn li').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        $('.user-big-box').hide()
        $('.right-box').addClass('guan')
        $('.kefu-up').eq($(this).index()).addClass('set-hide').siblings().removeClass('set-hide');
        $('.right-box').removeClass('hide')
        $('.content-btn li').removeClass('active')
        $('.set-btn li').removeClass('active')
    })

    $('.y-nav ul li').click(function() {
        $(this).addClass('on').siblings().removeClass('on');
        $('.y-box .list-box').eq($(this).index()).addClass('list-hide').siblings().removeClass('list-hide');

    })

    $('.y-nav2 ul li').click(function() {
        $(this).addClass('on').siblings().removeClass('on');
        $('.y-box .list-box2').eq($(this).index()).addClass('list-hide2').siblings().removeClass('list-hide2');

    })
    $('.new-btn  li').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        $('.y-box ').eq($(this).index()).addClass('y-hide').siblings().removeClass('y-hide');

    })
    $('.interaction-btn li').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        $('.interaction-box ').eq($(this).index()).addClass('interaction-hide').siblings().removeClass('interaction-hide');

    })
    $('.follow-btn li').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        $('.follow-box ').eq($(this).index()).addClass('follow-hide').siblings().removeClass('follow-hide');

    })



})

function loadmore(dom) {
    var typeid = $(dom).attr("data-typeid");
    var page = $(dom).attr("data-page");
    var page = parseInt(page) + 1;
    var _data = {
        "typeid": typeid,
        "page": page
    }
    $.ajax({
        data: _data,
        dataType: "json",
        url: '/web/index/myfollowshow',
        type: "POST",
        success: function(J) {
            if (J.code == 2) {
                layer.msg(J.msg);
            } else if (J.code == 1) {
                var str = '';
                for (var i = 0; i < J.data.myfollowplatform.length; i++) {
                    str += '<div class="left-website-content"><a target="_black" href="/platforminfo/' + J.data.myfollowplatform[i].platform_id + '"><div class="website-img">';
                    for (var j = 0; j < J.data.risklevel.length; j++) {
                        if (J.data.myfollowplatform[i].platformrisk == J.data.risklevel[j].risk_name) {
                            str += '<span class="label" style="color:white;display: inline-block;top: 0px;left: 0;padding: 1px 5px;color: #fff;border-radius: 5px 0 0 0;background-color:' + J.data.risklevel[j].color + ';">' + J.data.risklevel[j].risk_name + '</span>';
                        }
                    }
                    str += '<img src="' + J.data.myfollowplatform[i].platform.head_img + '"></div></a><div class="website-introduction"><h3><a href="/platforminfo/' + J.data.myfollowplatform[i].platform.id + '">' + J.data.myfollowplatform[i].platform.company_all_name + '</a>';
                    if (J.data.myfollowplatform[i].yingyungstatus != undefined && J.data.myfollowplatform[i].yingyungstatus != '') {
                        if (J.data.myfollowplatform[i].yingyungstatus == '停业') {
                            str += '<span style="background-color:#575755;" class="showspan">停业</span>';
                        } else if (J.data.myfollowplatform[i].yingyungstatus == '黑平台') {
                            str += '<span class="background-color:black;" class="showspan">黑平台</span>';
                        } else if (J.data.myfollowplatform[i].yingyungstatus == '问题') {
                            str += '<span style="background-color: rgb(241, 104, 12);" class="showspan">问题</span>';
                        } else if (J.data.myfollowplatform[i].yingyungstatus == '正常') {
                            str += '<span style="background-color:#2BB351;" class="showspan">正常</span>';
                        }
                    }
                    str += '</h3><p style="margin-top:5px;"><span>是否实盘：';
                    if (J.data.myfollowplatform[i].platform.is_honestpan == 0) {
                        str += '否';
                    } else {
                        str += '是';
                    }
                    str += '</span> &nbsp;&nbsp;      <span>所在地区：' + J.data.myfollowplatform[i].area + '</span>    &nbsp;&nbsp;    <span>上线时间：' + J.data.myfollowplatform[i].onlinetime + '</span></p><p class="numStr">综合评分：';
                    for (var k = 0; k < J.data.myfollowplatform[i].shinestar.length; k++) {
                        str += '<i class="str-active"></i>';
                    }
                    for (var l = 0; l < J.data.myfollowplatform[i].darkstar.length; l++) {
                        str += '<i class="str"></i>';
                    }
                    str += '</p></div><div class="rigs"><p style="text-align: center;">综合分</p><p class="num">' + J.data.myfollowplatform[i].mark + '</p></div></div>';
                }
                $(".show1").append(str);
                $(dom).attr("data-page", page);
            }
        }
    })
}

</script>

@endsection
@section('styles')
<style type="text/css">
    .searchul {
        width: 100%;
        position: absolute;
        top: 44px;
        left: 0;
        background: #fff;
        z-index: 1000 !important;
        max-height: 196px;
        overflow-y: scroll;
        box-shadow: 0 0 5px #ccc;
        height: 0;
        border-radius: 0 0 5px 5px;
    }

    .searchul li {
        color: #333;
        padding-left: 15px;
        line-height: 28px;
        cursor: pointer;

    }

    .searchul li:hover {
        background: #f2f2f2;
    }

    .fixed-i .fixed-header .input .shu {
        margin-top: 5px;
        width: 309px;
        height: 35px;
    }

    .fixed-i .fixed-header .input a {
        height: 37px;
    }

    .fixed-i .fixed-header .input {
        width: 390px;
    }

</style>
<link href="{{ asset('web/css/user.css') }}" rel="stylesheet">
<link href="{{ asset('web/css/company_detail.css') }}" rel="stylesheet">
@endsection
@section('scripts')
{{-- <script type="text/javascript" src="https://cdn.bootcdn.net/ajax/libs/layer/3.1.1/layer.js"></script> --}}
@endsection

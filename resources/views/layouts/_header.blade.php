<div class="fixed-i" >
    <div class="fixed-header">
        <a href="{{ route('home') }}"><div class="logo" ><img src="/web/image/logo.png" alt="首页标题"></div></a>
            <div class="logo-name">
                <img src="/web/image/logo-name.png">
            </div>
        <div class="input">
            <input class="shu" id="keyword2" type="text" placeholder="输入平台名称、公司名称、公司网址等" >
            <ul class="searchul" style="height: auto;display:none;">

            </ul>
            <a style="margin-top: 5px;" href="javascript:void(0);" onclick="return search2();">查查一下</a>
        </div>
        <div class="fixed-right" style="margin-top:30px;">
                <div class="login fr">
                    @guest
                    <a href="{{ route('login')}}">登录/注册</a>
                    @else
                    <a style="display:inline-block;max-width:100px;padding-left: 10px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;" href="{{ route('user.index')}}">{{ Auth::user()->name }}</a><a style="display:inline-block;max-width:100px;padding-left: 10px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;" href="javascript:void(0);" onclick="delUser()">[退出]</a>
                   @endguest
                </div>
                <div class="r1">
                    <a href="javascript:void(0);" onclick="return layer.msg('请先登录');">入驻</a>
                </div>
                <div class="r2 fr">
                    <a href="/commentlist">热评<span>HOT</span></a>
                    <a href="/monitorshow">监控</a>
                    <a href="/newestplatform">最新</a>
                     <a href="/complaintlist">曝光</a>
                </div>
        </div>
    </div>
</div>
<script>
    function delUser(){
      layer.confirm('您确定要退出？', {  // 使用layer.js确认弹窗
        btn: ['确定', '取消'],
      }, function() {            // 当确定时执行
        $.post("{{ route('logout') }}", {  // 网址、数据、成功后操作
          "_token": "{{ csrf_token() }}"
        }, function(data) {
            layer.msg('退出成功', { icon: 6});
            location.href = "";
        });
      }, function() {});
    }
</script>

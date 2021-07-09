function loginout(){
            var r=confirm("确定退出?");
            if (r==true)
              {
                    var _data = {
                        "typeid":1,
                    }
                    $.ajax({
                        data: _data,
                        dataType: "json",
                        url: '{:url("/web/logout")}' ,
                        type: "POST",
                        success: function (J) {
                           if(J.code==2){
                                 layer.msg(J.msg);
                           }else if(J.code==1){
                                $.removeCookie('mywebkey',{ path: '/'});
                                window.location.href="/web/login";
                           }
                        }
                    })
                }

            }
    $('#keyword2').bind('input propertychange', function() {
        var keyword=$("#keyword2").val();
        $(".showli").remove();
        var _data = {
            "keyword":keyword,
        }
        $.ajax({
            data: _data,
            dataType: "json",
            url: '/getplatformlist' ,
            type: "POST",
            success: function (J) {
               if(J.code==2){
                     layer.msg(J.msg);
               }else if(J.code==1){
                        var str='';
                        for (var i = 0; i < J.data.length; i++) {
                            str+='<li class="showli" onclick="return clickthis3(this);">'+J.data[i].company_all_name+'</li>';
                        }
                        $(".searchul").append(str);
                        $(".searchul").css('display',"");
               }
            }
        })
    });
    function clickthis3(dom){
        var thisval=$(dom).html();
        $("#keyword2").val(thisval);
        $(".searchul").css('display',"none");
    }
    function search2(){
        var keyword=$("#keyword2").val();
        if(keyword==''){
            layer.msg('输入平台全称、平台简称、公司名称、公司网址等进行查询');
            return false;
        }
        window.location.href="/platformsearchlist?keyword="+keyword;
    }


    $('.fixed-header .fixed-nav li').mouseover(function() {

        $('.fixed-nav li ').eq($(this).index()).addClass('dl-active').siblings().removeClass('dl-active');


    })
    $('.fixed-header .fixed-nav li').mouseout(function() {
        $(this).removeClass('dl-active')
    })

    $('.input-top span').click(function (index) {
        $(this).addClass('active').siblings().removeClass('active');
    })

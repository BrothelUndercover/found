@extends('layouts.app')

@section('content')
<div class="about-wrap">
        <div class="wrap">
            <nav class="about-nav">
                <ul class="clearfix">
                    <a href="{{ route('pages.about') }}">
                        <li>
                            <span>关于我们</span>
                        </li>
                    </a>
                    <a href="{{ route('pages.contactus') }}">
                        <li>
                            <span>联系我们</span>
                        </li>
                    </a>
                    <a href="{{ route('pages.agreement') }}">
                        <li>
                            <span>用户协议</span>
                        </li>
                    </a>
                    <a href="{{ route('pages.statement') }}">
                        <li class="active">
                            <span>免责声明</span>
                        </li>
                    </a>
                </ul>
            </nav>
            <div class="about-content about-hide">
                     <p>
                        <span style="font-size:18px;">免责声明</span>
                    </p>
                    <p>
                        1) 配天眼对由于用户不正当使用本网站服务、或依据本网站信息进行交易引起的对任何第三方的损害不承担任何赔偿责任；
                    </p>
                    <p>
                        2) 本网站的内容及提供的服务不含任何明示性或暗示性的声明、保证或条件，包括但不限于关于真实性、 时效性或适用于某一特定用途的明示或暗示性的声明、保证或条件，或者对其使用不会被中断或无误；
                    </p>
                    <p>
                        3) 配天眼不声明或保证本网站或可从本网站下载的内容不带有计算机病毒或类似垃圾或破坏功能；
                    </p>
                    <p>
                        4) 配天眼不担保本网站服务一定能满足用户的要求，不对页面内容的删除或储存失败负责；
                    </p>
                    <p>
                        5) 若配天眼已经明示本网站运营方式发生变更并提醒用户应当注意事项，用户未按要求操作所产生的一切后果由用户自行承担；
                    </p>
                    <p>
                        6) 已经注册为配天眼会员的用户，在超出会员服务范围外要求的其他服务可能会产生额外的费用由用户自己承担。
                    </p>
                    <p>
                        7) 配天眼对由于政府禁令、现行生效的适用法律或法规的变更、火灾、地震、动乱、战争、停电、通讯线路中断、
                        黑客攻击、计算机病毒侵入或发作、电信部门技术调整、因政府管制而造成网站的暂时性关闭等任何影响网络正常运营的不可预见、
                        不可避免、不可克服和不可控制的事件（“不可抗力事件”），以及他人蓄意破坏、金堤科技工作人员的过失疏忽或不当使用， 正常的系统维护、
                        系统升级，或者因网络拥塞而导致本网站不能访问而造成的本站所提供的信息及数据的延误、 停滞或错误，使用者由此受到的一切损失不承担任何责任。
                    </p>
                    <p>
                        8) 用户确认其知悉由于您将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人信息的泄漏， 或其他非因配天眼平台原因导致的个人信息的泄漏，配天眼概不负责；
                    </p>
                    <p>
                        9) 用户确认其知悉，使用本网站提供的服务涉及到互联网服务， 可能会受到各个环节不稳定因素的影响。因此服务存在因国家相关行业主管部门及电信运营商的调整、
                        系统不稳定、用户所在位置、用户关机以及其他任何技术、互联网络、通信线路原因等造成的服务中断或不能满足用户要求的风险。
                        用户须承担以上风险，配天眼不作担保。对因此导致用户不能发送、上传和接受阅读消息、或接发错消息， 或无法实现其他通讯条件，配天眼不承担任何责任。
                    </p>
                    <p>
                        10) 用户确认其知悉，在使用本网站提供的服务存在有来自任何其他人的包括威胁性的、诽谤性的、 令人反感的或非法的内容或行为或对他人权利的侵犯(包括知识产权)
                        的匿名或冒名的信息的风险，用户须承担以上风险，对因此导致任何因用户不正当或非法使用服务产生的直接、间接、偶然、 惩罚性的损害，不承担任何责任。
                    </p>
                    <p>
                        11) 如果您不是具备完全民事权利能力和完全民事行为能力的自然人，您无权使用配天眼服务， 因此配天眼希望您不要向我们提供任何个人信息。
                    </p>
                    <p>
                        12)配天眼及配天眼站内所有用户提供的信息及观点，不作为投资建议。
                    </p>
                    <p>
                        13)任何投资都具备风险性，配天眼提示所有投资者“入市有风险，投资需谨慎”。
                    </p>
                    <p>
                        <br>
                    </p>
            </div>
        </div>
    </div>
@endsection
@section('styles')
<link href="{{ asset('web/css/about.css') }}" rel="stylesheet">
@endsection
@section('scripts')
@endsection

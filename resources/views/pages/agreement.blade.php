@extends('layouts.app')
@section('title','用户协议')
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
                        <li class="active">
                            <span>用户协议</span>
                        </li>
                    </a>
                    <a href="{{ route('pages.statement') }}">
                        <li>
                            <span>免责声明</span>
                        </li>
                    </a>
                </ul>
            </nav>
            <div class="about-content about-hide">
                 <p>
                    <span style="font-size:18px;">用户协议</span>
                </p>
                <p>
                    用户协议欢迎使用配天眼，在您使用配天眼提供的各项VIP会员及非会员服务（以下简称“服务”）之前，请务必仔细阅读并透彻理解本协议。
                </p>
                <p>
                    如您不同意本协议及其更新内容，您可以主动取消配天眼提供的服务；您一旦使用配天眼的服务，即视为您已了解并完全同意本协议的各项内容，
                    并成为配天眼用户（以下简称“用户”）。配天眼有权在必要时修改用户协议，协议一旦发生变动，将会以网站公告的形式提示修改内容，
                    变动结果将在配天眼通知之日起生效。如果您不同意所改动的内容，您有权停止使用配天眼的服务，如果您继续使用配天眼的各项服务，
                    则视为接受服务条款的变动。用户理解并同意：由于数据行业的特殊性，配天眼具有保留修改或中断部分或全部服务的权利。
                </p>
                <p>
                    <br>
                </p>
                <p>
                    <span style="font-size:18px;">用户注册及使用规范</span>
                </p>
                <p>
                    1、配天眼账号的所有权归配天眼所有，您完成申请注册手续后，将获得所注册账号的使用权，该使用权仅限于您使用，您无权赠与、借用、租用、转让或售卖您的账号。
                </p>
                <p>
                    2、用户应当妥善保管账户及密码信息，由于用户自身行为导致的账户或密码的泄露、遗忘等情形或其他原因所带来的损失， 配天眼将尽量配合用户采取积极措施降低相关损失，但因此造成的不利后果由用户自行承担。
                </p>
                <p>
                    3、您在使用配天眼时，所发布的信息（包括用户注册名、用户头像等）时，
                    必须遵守国家有关法律规定，并承担一切因自己发布信息不当导致的民事、行政、或刑事法律责任。您在使用配天眼所发布的消息，不得含有以下内容或用于以下目的：违反宪法确定的基本原则的；
                </p>
                <p>
                    危害国家安全，泄露国家机密，颠覆国家政权，破坏国家统一的；
                </p>
                <p>
                    损害国家荣誉和利益，攻击党和政府的；
                </p>
                <p>
                    煽动民族仇恨、民族歧视，破坏民族团结的；
                </p>
                <p>
                    破坏国家、地区间友好关系的；
                </p>
                <p>
                    违背中华民族传统美德、社会公德、论理道德、以及社会主义精神文明的；
                </p>
                <p>
                    破坏国家宗教政策，宣扬邪教和封建迷信的；
                </p>
                <p>
                    散布谣言或不实消息，扰乱社会秩序，破坏社会稳定的；
                </p>
                <p>
                    煽动、组织、教唆恐怖活动、非法集会、结社、游行、示威、聚众扰乱社会秩序的；
                </p>
                <p>
                    散布淫秽、色情、赌博、暴力、恐怖或者教唆犯罪的；
                </p>
                <p>
                    侮辱或诽谤他人，侵害他人合法权益的；
                </p>
                <p>
                    侵犯他人肖像权、姓名权、名誉权、隐私权或其他人身权利的；
                </p>
                <p>
                    以非法民间组织名义活动的；
                </p>
                <p>
                    侵犯他人著作权等合法权益的；
                </p>
                <p>
                    侵犯他人商业秘密等合法权益的；
                </p>
                <p>
                    含有其他违反法律、法规、国家政策及公序良俗的法律、行政法规禁止的其他内容的。
                </p>
                <p>
                    4、如果您在使用配天眼所提供的的服务时不能履行和遵守协议中的规定，配天眼有权删除您发布的相关信息，直到封闭您的账号或/和暂时、永久禁止在配天眼发布信息的处理，
                    同时保留依法追究您的法律责任的权利，配天眼保留将系统内的记录有可能作为您违反法律和本协议的证据加以保存与展示的权利。
                </p>
                <p>
                    5、未经配天眼许可，任何单位或个人不得通过任何方式（包括但不限于恶意注册配天眼账号， 机器抓取、复制、镜像等方式）不合理地获取配天眼站内信息、资讯、数据等。
                </p>
                <p>
                    <br>
                </p>
                <p>
            </p></div>

        </div>
    </div>
@endsection
@section('styles')
<link href="{{ asset('web/css/about.css') }}" rel="stylesheet">
@endsection
@section('scripts')
@endsection

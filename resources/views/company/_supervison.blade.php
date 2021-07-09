<div class="supervise-box">
    <ul>
        <li class="green">
            <div class="open">
                <div class="open-s clearfix">
                    <div class="pic">
                        <img src="/storage/{{$company->supervision_logo }}">
                    </div>
                    <div class="rig"><span>{{$company->supervision_name ?? '--'}}</span><i>监管中</i></div>
                </div>
                <dl class="clearfix">
                    <dt>监管国家：{{ $company->supervision_country }}<img src="/web/image/zhongguo.png"></dt>
                    <dt>监管性质：国家监管</dt>
                    <dt>牌照类型：{{ $company->supervision_type }}</dt>
                    <dt>发证时间：{{ $company->supervision_card_at }}</dt>
                    <dt style="width:100%;">监管证号：{{ $company->supervision_code }}</dt>
                </dl>
            </div>
        </li>
    </ul>
</div>

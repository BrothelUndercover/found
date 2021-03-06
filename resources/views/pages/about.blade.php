@extends('layouts.app')

@section('title','关于我们')

@section('content')
<div class="about-wrap">
    <div class="wrap">
        <nav class="about-nav">
            <ul class="clearfix">
                <a href="/aboutus">
                    <li class="active">
                        <span>关于我们</span>
                    </li>
                </a>
                <a href="{{route('pages.contactus' )}}">
                    <li>
                        <span>联系我们</span>
                    </li>
                </a>
                <a href="{{route('pages.agreement' )}}">
                    <li>
                        <span>用户协议</span>
                    </li>
                </a>
                <a href="{{route('pages.statement' )}}">
                    <li>
                        <span>免责声明</span>
                    </li>
                </a>
            </ul>
        </nav>
        <div class="about-content about-hide">
            <!--  <p style="text-align: center;">
                <img src="/web/image/20190723134334_92694.png">
            </p> -->
            <p>
                <br>
            </p>
            <p>
                深圳市科沃征信服务有限公司成立于2019年，公司位于深圳市福田区沙头街道天安社区深南大道6021号喜年中心A座2517B6， 主要从事数据处理和存储服务；信息技术咨询服务；软件开发；软件服务；软件测试服务；软件批发；软件零售；信息电子技术服务；企业资质服务；企业信用评级服务；企业信誉评估服务；企业信用管理咨询服务等业务，旗下自主研发产品：配天眼是由恒升软件研发的一款商业安全工具， 核心功能为：查企业，查平台，查安全。 配天眼基于公开数据，结合大数据库技术的计算机语言学习能力，挖掘全网企业平台信息，为用户提供更加透明的信息，提供安全投资环境。
            </p>
            <p>
                <br>
            </p>
            <p>
                配天眼是由恒升软件开发的安全查询工具，在基于独有核心数据处理技术的基础上， 构建了完备的集数据采集、数据检测、数据监测化为一体的大数据解决方案。 秉持“为用户提供更安全的投资环境”的使命，采用公开的数据，透明的检测规则，深度挖掘和分析相关数据，曝光风险等。为用户呈现可视化的安全投资环境。
            </p>
        </div>
        <div class="about-content">
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
            <p>
                <span style="font-size:18px;">责任限制</span>
            </p>
            <p>
                鉴于配天眼平台提供的服务属于公开数据的整理，配天眼平台上的信息均来自网络公开信息，由信息来源方对信息真实性等负相应责任，配天眼平台所展示信息出于传递更多信息之目的，并不意味配天眼赞同其观点或已经证实其内容的真实性。此外配天眼不保证所展示信息完全符合客观事实情况，还请用户自行核实信息的完整与准确并承担使用后果。
            </p>
            <p>
                <br>
            </p>
            <p>
                <span style="font-size:18px;">禁止事项</span>
            </p>
            <p>
                如果您同意该项协议，则默认您承诺不做以下行为：
            </p>
            <p>
                1) 上载、展示、张贴、传播或以其它方式传送含有下列内容之一的信息 （包括但不限于图片、文字、视频、链接、音乐等）：
            </p>
            <p>
                a) 反对宪法所确定的基本原则的；
            </p>
            <p>
                b) 危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；
            </p>
            <p>
                c) 损害国家荣誉和利益的；
            </p>
            <p>
                d) 煽动民族仇恨、民族歧视、破坏民族团结的；
            </p>
            <p>
                e) 破坏国家宗教政策，宣扬邪教和封建迷信的；
            </p>
            <p>
                f) 散布谣言，扰乱社会秩序，破坏社会稳定的；
            </p>
            <p>
                g) 散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；
            </p>
            <p>
                h) 侮辱或者诽谤他人，侵害他人合法权利的；
            </p>
            <p>
                i) 含有虚假、欺诈、有害、胁迫、侵害他人隐私、骚扰、侵害、中伤、粗俗、猥亵、与公序良俗不符或其它道德上令人反感的内容；
            </p>
            <p>
                j) 含有中国法律、法规、规章、条例以及任何具有法律效力之规范所限制或禁止的其它内容的。
            </p>
            <p>
                2) 为任何非法目的而使用配天眼网络服务系统；
            </p>
            <p>
                3) 利用配天眼从事以下活动：
            </p>
            <p>
                a) 未经书面允许，进入计算机信息网络或者使用计算机信息网络资源的；
            </p>
            <p>
                b) 未经书面允许，对计算机信息网络功能进行删除、修改或者增加的；
            </p>
            <p>
                c) 未经书面允许，进入计算机信息网络中对存储、处理或者传输的数据和应用程序进行删除、修改或者增加的；
            </p>
            <p>
                d) 故意制作、传播计算机病毒（包括木马）等破坏性程序；
            </p>
            <p>
                e) 其他危害计算机信息网络安全的行为。
            </p>
            <p>
                4) 对配天眼相关服务任何部分或本服务之使用或获得，进行复制、出售、转售或用于任何其它商业目的。
            </p>
            <p>
                用户需对其在使用配天眼提供数据信息服务过程中的行为承担完全的法律责任。如果配天眼发现其网站传输的信息明显属于本条规定的内容之一，或配天眼合理地认为用户的行为可能违反相关法律法规或本协议的规定，配天眼可以在任何时候、不经事先通知终止本协议，禁止相关用户访问配天眼提供数据信息，保存有关记录，向有权机关报告，并且删除含有该内容的地址、目录或关闭服务器。用户使用配天眼提供的其他数据信息的电子服务，也须遵守本协议的规定。
            </p>
            <p>
                因用户提供的内容违法或侵犯第三人的合法权
                益而导致配天眼对第三方承担任何性质的赔偿、补偿或罚款而遭受损失(包括但不限于直接的、间接的、偶然的、惩罚性的损失)，用户对于配天眼遭受的上述损失承担完全的赔偿责任。
            </p>
            <p>
                <br>
            </p>
            <p>
                <span style="font-size:18px;">声明接受</span>
            </p>
            <p>
                1) 用户在使用配天眼前对本声明的条款已充分阅读，就声明的条款内容进行了充分沟通。 用户已完整、清晰的理解每一条款的真实含义，对声明的条款约定的双方权利义务均不存在异议与保留意见。
            </p>
            <p>
                2) 双方在此确认就本声明的条款内容，不存在重大误解、 欺诈胁迫等可能导致本声明的条款可撤销或自始无效等效力瑕疵事宜。明确放弃基于上述及类似理由产生的撤销权。
            </p>
            <p>
                3) 用户在使用配天眼网站或软件时即代表其已经声明基于真实有效的意思表示，接受本声明的条款。
            </p>
            <p>
                4) 本协议条款的最终解释权归配天眼所有。
            </p>
            <p>
                <br>
            </p>
            <p>
                <br>
            </p>
        </div>
        <div class="about-content">
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

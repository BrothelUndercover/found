<table class="com">
    <tbody>
        <tr>
            <td>公司名称</td>
            <td colspan="3">{{ $company->company_name }}</td>
        </tr>
        <tr>
            <td>法定代表人</td>
            <td colspan="3">{{ $company->company_person ?? '-' }}</td>
        </tr>
        <tr>
            <td>注册资本</td>
            <td>{{ $company->company_capital ?? '-'}}</td>
            <td>实缴资本</td>
            <td>{{ $company->company_paid ?? '-'}}</td>
        </tr>
        <tr>
            <td>成立日期</td>
            <td>{{ $company->Established_at ?? '-'}}</td>
            <td>经营状态</td>
            <td>{{ $company->operating_status ?? '-' }}</td>
        </tr>
        <tr>
            <td>统一社会信用代码</td>
            <td>{{ $company->business_creditcode ?? '-' }}</td>
            <td>工商注册号</td>
            <td>{{$company->business_num ?? '-'}}</td>
        </tr>
        <tr>
<!--                      <td>纳税人识别号</td>
            <td></td> -->
            <td>组织机构代码</td>
            <td>{{$company->organization_code ?? '-'}}</td>
        </tr>
        <tr>
            <td>企业类型</td>
            <td>{{ $company->company_type ?? '-'}}</td>
            <td>行业</td>
            <td>{{ $compay->industry ?? '-'}}</td>
        </tr>
        <tr>
            <td>核准日期</td>
            <td>{{ $company->approved_at }}</td>
            <td>登记机关</td>
            <td>{{ $company->regauth }}</td>
        </tr>
        <tr>
            <td>营业期限</td>
            <td>{{ $company->period ?? '--'}}</td>
            <td>纳税人资质</td>
            <td>{{$company->taxqua ?? '-'}}</td>
        </tr>
        <tr>
            <td>注册地址</td>
            <td colspan="3">{{ $company->regi_addr ?? '--'}}</td>
        </tr>
        <tr>
            <td>经营范围</td>
            <td colspan="3">{{ $company->business_scope ?? '--'}}</td>
        </tr>
    </tbody>
</table>

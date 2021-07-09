<table>
    <tbody>
        <tr>
            <td>序号</td>
            <td>审核日期</td>
            <td>负责人</td>
            <td>网站首页</td>
            <td>域名</td>
            <td>网站备案/许可证号</td>
        </tr>
        <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->record_checkdate ?? '--'}}</td>
            <td>{{ $company->record_chargeperson ?? '--'}}</td>
            <td><a href="{{ $company->platform_url}}" target="_bank" rel="nofollow" id="MainPage">{{ $company->platform_url ?? '--'}}</a></td>
            <td id="MainPage2">{{ $company->platform_url ?? '--'}}</td>
            <td>{{ $company->record_code ?? '--'}}</td>
        </tr>
    </tbody>
</table>

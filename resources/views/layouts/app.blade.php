<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '配天眼') - 小配帮你查，投资更安全</title>
    <meta name="keyword" content="@yield('keyword',"配天眼,配天眼官网")" />
    <meta name="author" content="配天眼,查查">
    <meta name="description" content="@yield('description','配天眼是由深圳科沃征信开发的安全查询工具，在基于独有核心数据处理技术的基础上， 构建了完备的集数据采集、数据检测、数据监测化为一体的大数据解决方案。 秉持“为用户提供更安全的投资环境”的使命，采用公开的数据，透明的检测规则，深度挖掘和分析相关数据，曝光风险等，为用户呈现可视化的安全投资环境。')" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="icon" href="{{ asset('web/image/urlheadimg.png')}}" type="image/png">
    <link href="{{ asset('web/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/footer-header.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body>
    <div id="app">
        @include('layouts._header')

        @yield('content')

       @include('layouts._footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('web/js/jquery.js') }}" ></script>
    <script src="{{ asset('web/js/jquery.cookie.js') }}" defer></script>
    <script type="text/javascript" src="https://cdn.bootcdn.net/ajax/libs/layer/3.1.1/layer.js"></script>
    @yield('scripts')
</body>
</html>

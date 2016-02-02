<!DOCTYPE html>
<html>
<head>
    <title>凡语BLOG_CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title> @yield('title')</title>
    <script src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?= env("STATIC_URL")?>style/js/layer.js"></script>
    @yield('css')
    @yield('js')
    <!--//webfonts-->
    <script src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
    @yield('content')
</body>
</html>

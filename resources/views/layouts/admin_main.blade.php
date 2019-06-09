<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('dictionary.title') }}</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css?">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script src="/js/jquery.js"></script>
    <script src="/js/java.js?"></script>
    <script src="/js/llqrcode.js"></script>
    <script src="/js/webqr.js?"></script>
</head>
<body>
    <header>
        <div class="menu"><a href="">АДМИНИСТРАТОР</a></div>
        <div class="menu"><a href="">МАРШРУТЫ</a></div>
        <div class="menu"><a href="/transports">ТРАНСПОРТНЫЕ СРЕДСТВА</a></div>
        <div class="menu"><a href="">КОНТРОЛЕРЫ</a></div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <div class="exit-button"><a href="/logout" class="exit">{{ trans('dictionary.exit') }}</a></div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Система электронной оплаты проезда</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css?">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script src="/js/jquery.js"></script>
    <script src="/js/java.js?"></script>
    <script src="/js/llqrcode.js"></script>
    <script src="/js/webqr.js?"></script>
</head>
<body>
	<div class="all">
        <div class="logo">
            <a href="/" class="logo-img"><img src="/pic/logo3.png"></a>
            <a href="ru" class="flags"><img src="/pic/flag-ru.png"><span>рус</span></a>
        </div>
		<div class="main">
			@yield('content')
		</div>
	</div>
</body>
</html>
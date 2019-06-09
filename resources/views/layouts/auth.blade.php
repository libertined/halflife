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
    <script type="text/javascript" src="/js/qrcode.min.js"></script>

</head>
<body>
	<div class="all">
        <div class="logo">
            <a href="/" class="logo-img"><img src="/pic/logo3.png"></a>
        </div>
		<div class="main">
			@yield('content')
            <div class="three-on-floor">
                <div class="forgot"><a href="#">{{ trans('dictionary.forgot_passw') }}</a><span>i</span></div>
                <div class="weakview"><a href="#"></a></div>
                <div class="lang">
                    @if (app()->isLocale('en'))
                        <a href="/setlocale/ru" class="flags ru"></a>
                    @else
                        <a href="en" class="flags en"></a>
                    @endif
                </div>
            </div>
		</div>
	</div>
</body>
</html>
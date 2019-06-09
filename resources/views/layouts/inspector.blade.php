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
        <div class="exit-button"><a href="/logout" class="exit">{{ trans('dictionary.exit') }}</a></div>
		<div class="main">
			@yield('content')
		</div>
	</div>
</body>
</html>
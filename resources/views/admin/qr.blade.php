@extends('layouts.main')

@section('content')
	<p><img src="http://chart.apis.google.com/chart?cht=qr&chs=480x480&chl=https://finvic.ru/buy/12345/"></p>';
	<p>Автобус №34<br>{{ trans('dictionary.qr_inbus_coment') }}</p>
@endsection
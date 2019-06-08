@extends('layouts.main')

@section('content')
	<div class="param-qr">
		<div class="qr-code"><img src="http://chart.apis.google.com/chart?cht=qr&chs=320x320&chl=3ihdhg4hg34vr3g434r"></div>
	</div>
	<div class="param-visual">
		<div class="ticket-time"><?=date("d.m.Y H:i", 1560006691) ?></div>//$ticket_data['timestamp']
		<div class="ticket-bus"><span>Автобус</span> <span>№34</span> - <span>31 </span><span>{{ trans('dictionary.rub') }}</span></div>
	</div>
	<p>{{ trans('dictionary.ticket_show_info') }}</p>
	<p>&nbsp;</p>
	<div><a href="/" class="art-button btn-large">{{ trans('dictionary.go_to_cabinet') }}</a></div>
@endsection
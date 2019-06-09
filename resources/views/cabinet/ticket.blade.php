@extends('layouts.main')

@section('content')
	<div class="param-qr">
		<div class="qr-code" id="qrcode">
            <img src="blank.png" alt="{{ $verifyLink }}"></p>
        </div>
	</div>
	<div class="param-visual">
		<div class="ticket-time"><?=date("d.m.Y H:i", 1560006691) ?></div>
		<div class="ticket-bus"><span>Автобус</span> <span>№34</span> - <span>31 </span><span>{{ trans('dictionary.rub') }}</span></div>
	</div>
	<p>{{ trans('dictionary.ticket_show_info') }}</p>
	<p>&nbsp;</p>
	<div><a href="/" class="art-button btn-large">{{ trans('dictionary.go_to_cabinet') }}</a></div>
@endsection

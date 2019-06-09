@extends('layouts.main')

@section('content')
	<div class="ticket-wrap">
		<div class="param-visual">
			<div class="ticket-bus"><span>{{ $transaction->transport->type->title }}</span> <span>№{{ $transaction->transport->route->number }}</span></div>
			<div class="ticket-time">{{ $transaction->created_at->format("d.m.Y H:i") }}</div>
			<div class="ticket-cost">{{ $transaction->cost }}  {{ trans('dictionary.rub') }}</div>
		</div>
		<div class="qr-code" id="qrcode">
			<img src="blank.png" alt="{{ $verifyLink }}"></p>
			<!--<img src="blank.png" alt="{{ $verifyString }}"></p>-->
		</div>
		<div class="param-pin">
			<div>1 2 3 4</div>
		</div>
	</div>
	<div>
		@if(\Illuminate\Support\Facades\Auth::check())
			<a href="{{ route('cabinet') }}" class="art-button btn-large">{{ trans('dictionary.go_to_cabinet') }}</a>
		@else
			<a href="{{ route('register') }}" class="art-button btn-large">{{ trans('dictionary.go_to_cabinet') }}</a>
		@endif
	</div>
@endsection

@extends('layouts.main')

@section('content')
	<div class="ticket-wrap">
		<div class="param-visual">
			<div class="ticket-bus"><span>{{ $transaction->transport->type->title }}</span> <span>№{{ $transaction->transport->route->number }}</span></div>
			<div class="ticket-time">{{ $transaction->created_at->format("d.m.Y H:i") }}</div>
			<div class="ticket-cost">{{ $transaction->cost }}  {{ trans('dictionary.rub') }}</div>
		</div>
		<div class="param-qr">
			<div class="qr-code"><img src="http://chart.apis.google.com/chart?cht=qr&chs=240x240&chl={{ $verifyString }}"></div>
		</div>
		<div class="param-pin">
			<div>1 2 3 4</div>
		</div>
		<div>{{ trans('dictionary.ticket_show_info') }}</div>
	</div>
	<div>
		@if(\Illuminate\Support\Facades\Auth::check())
			<a href="{{ route('cabinet') }}" class="art-button btn-large">{{ trans('dictionary.go_to_cabinet') }}</a>
		@else
			<a href="{{ route('register') }}" class="art-button btn-large">{{ trans('dictionary.go_to_cabinet') }}</a>
		@endif
	</div>
@endsection

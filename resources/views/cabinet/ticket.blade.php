@extends('layouts.main')

@section('content')
	<div class="param-qr">
		<div class="qr-code" id="qrcode">
            <img src="blank.png" alt="{{ $verifyString }}"></p>
        </div>
	</div>
	<div class="param-visual">
		<div class="ticket-time">{{ $transaction->created_at->format("d.m.Y H:i") }}</div>
		<div class="ticket-bus"><span>{{ $transaction->transport->type->title }}</span> <span>№ {{ $transaction->transport->route->number }}</span> - <span>{{ $transaction->cost }} </span><span>{{ trans('dictionary.rub') }}</span></div>
	</div>
	<p>{{ trans('dictionary.ticket_show_info') }}</p>
	<p>&nbsp;</p>
	<div>
        @if(\Illuminate\Support\Facades\Auth::check())
            <a href="{{ route('cabinet') }}" class="art-button btn-large">{{ trans('dictionary.go_to_cabinet') }}</a>
        @else
            <a href="{{ route('register') }}" class="art-button btn-large">{{ trans('dictionary.go_to_cabinet') }}</a>
        @endif
    </div>
@endsection

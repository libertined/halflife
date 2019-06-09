@extends('layouts.main')

@section('content')
	<div class="qr-code" id="qrcode">
		<img src="blank.png" alt="{{ route('pay.show', $transport) }}"></p>
	</div>
	<p>{{ $transport->type->title }} №{{ $transport->route->number }}<br>{{ trans('dictionary.qr_inbus_coment') }}</p>

@endsection
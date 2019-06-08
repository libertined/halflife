@extends('layouts.main')

@section('content')
	<div class="h1"><h1>{{ trans('dictionary.h1_buy') }}</h1></div>
	<div class="active-form" id="buy">
		<div class="io">
			<p>{{ trans('dictionary.buy_info') }}</p>
			<input type="hidden" name="buy[bus]" value="{{ $id }}">
			<p class="p-large">{{ $type }} №{{ $route }}</p>
			<p class="p-large">{{ trans('dictionary.buy_cost') }}: {{ $tariff['cost'] }} {{ trans('dictionary.rub') }}</p>
		</div>
		<label class="go-on"><a href="{{ $link }}" class="art-button btn-large">{{ trans('dictionary.sbm_buy') }}</a></label>
	</div>
@endsection

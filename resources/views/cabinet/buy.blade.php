@extends('layouts.main')

@section('content')
	<div class="h1"><h1>{{ trans('dictionary.h1_buy') }}</h1></div>

	<div class="active-form pay-form" id="{{ $prepareLink }}">
		<div class="io">
			<input type="hidden" name="buy[bus]" value="{{ $prepareLink }}">
			<p>{{ $transport->type->title }} №{{ $transport->route->number }}</p>
			<p><?=date("d.m.Y") ?></p>
			<p>{{ $tariff->cost }}  {{ trans('dictionary.rub') }}</p>
		</div>
		<label class="go-on"><a href="#" class="art-button btn-large">{{ trans('dictionary.sbm_buy') }}</a></label>
	</div>
@endsection

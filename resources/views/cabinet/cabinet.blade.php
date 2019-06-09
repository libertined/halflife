@extends('layouts.main')

@section('content')
	<div class="dual">
		<div>
			<div class="h1"><h1>{{ trans('dictionary.h1_balance') }}</h1></div>
			<div class="balance">
				<div class="money"><span class="money-digit">980</span> <span class="money-currency">{{ trans('dictionary.rub') }}</span></div>
				<div class="add-funds"><a href="#addfunds" class="turner">{{ trans('dictionary.addfunds') }}</a></div>
			</div>
			<div class="popup add-funds-form" id="addfunds">
				<div class="active-form" id="payment">
					<label class="switch1"><input type="text" name="payment[sum]" value="" placeholder="{{ trans('dictionary.payment_sum_plh') }}"></label>
					<label class="go-on"><a href="#" class="art-button btn-large">{{ trans('dictionary.sbm_pay_sum') }}</a></label>
				</div>
			</div>
		</div>
		<div>
			<div class="real-ticket"><a href="{{ route('pay.ticket', ['transaction' => $transaction->id, 'signature' => $transaction->getSignature()]) }}">{{ trans('dictionary.thereis_ticket') }}<br>{{ $transaction->transport->type->title }} №{{ $transaction->transport->route->number }}</a></div>
		</div>
	</div>
	<div class="buy-button">
		<div><a href="{{ route('scan') }}" class="art-button">{{ trans('dictionary.sbm_getscan') }}</a></div>
	</div>
	<div class="stack">
		<div class="h2"><h2 class="cntr">{{ trans('dictionary.h1_history') }}</h2></div>
		<div class="history-stack">

		</div>
	</div>
	<div class="exit-button"><a href="/logout" class="exit">{{ trans('dictionary.exit') }}</a></div>
	</div>
@endsection

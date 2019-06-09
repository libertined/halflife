@extends('layouts.main')

@section('content')
	<h1>{{ trans('dictionary.addfunds') }}</h1>
	<div class="io">
		<input type="hidden" name="paydata[pageback]" value="cabinet">
		<!--input type="hidden" name="paydata[sum]" value="31"><p>Стоимость проезда: 31 руб.</p-->
		<label class="pay-sum"><input type="text" name="paydata[sum]" value="" placeholder="{{ trans('dictionary.payment_sum_plh') }}"></label>
		<div class="card-data">
			<div class="card-data-front">
				<img src="/pic/cards.png">
				<label><input type="text" name="paydata[cardnum]" value="" placeholder="{{ trans('dictionary.payment_card_number') }}"></label>
				<label class="pay-thru">
					<input type="text" name="paydata[validthru]" value="" placeholder="{{ trans('dictionary.payment_date') }}">
				</label>
			</div>
			<div class="card-backdata">
				<label><input type="text" name="paydata[cvc]" value="" placeholder="CVC"></label>
			</div>
		</div>
		<p class="error switch2"></p>
	</div>
	<div class="buy-button">
		<div><a href="#" class="art-button go-pay">{{ trans('dictionary.sbm_getscan') }}</a></div>
	</div>
@endsection
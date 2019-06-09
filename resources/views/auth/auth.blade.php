@extends('layouts.auth')

@section('content')
	<div class="h1"><h1>{{ trans('dictionary.h1_authorize') }}</h1></div>
	<div class="active-form" id="auth">
		<div class="io">
			<input type="hidden" name="auth[action]" value="auth">
			<label><input type="text" name="auth[nic]" value="" placeholder="{{ trans('dictionary.nic_plh') }}"></label>
			<label><input type="password" name="auth[passw]" value="" placeholder="{{ trans('dictionary.passw_plh') }}"></label>
			<p class="error switch2"></p>
		</div>
		<div class="sms-code">
			<label><input type="text" name="auth[smscode]" value="" placeholder="{{ trans('dictionary.sms_plh') }}"></label>
		</div>
		<label class="go-on"><a href="#" class="art-button play-button"></a></label>
	</div>
	<div>
		<p class="register-link"><a href="/register/">{{ trans('dictionary.sbm_register') }}</a></p>
	</div>
	<div>
		<label class="onepay"><a href="/scan/" class="art-button art22 btn-large">{{ trans('dictionary.onepay_link') }}</a></label>
	</div>
@endsection
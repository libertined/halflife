@extends('layouts.auth')

@section('content')
	<div class="h1"><h1>{{ trans('dictionary.h1_register') }}</h1></div>
	<div class="active-form" id="auth">
		<div class="io">
			<p class="registration-info">{{ trans('dictionary.reg_inauth_info') }}</p>
			<input type="hidden" name="auth[action]" value="register">
			<label><input type="text" name="auth[nic]" value="" placeholder="{{ trans('dictionary.nic_plh') }}"></label>
			<label><input type="password" name="auth[passw]" value="" placeholder="{{ trans('dictionary.passw2_plh') }}"></label>
			<p class="error switch2"></p>
		</div>
		<div class="sms-code">
			<p class="switch1">{{ trans('dictionary.sms_code_info') }}</p>
			<label><input type="text" name="auth[smscode]" value="" placeholder="{{ trans('dictionary.sms_plh') }}"></label>
		</div>
		<label class="go-on"><a href="#" class="art-button play-button" title="{{ trans('dictionary.sbm_register') }}"></a></label>
	</div>
	<div>
		<p class="register-link"><a href="/auth/"></a></p>
	</div>
	<div>
		<label class="onepay"><a href="/auth/" class="art-button art22 btn-large">{{ trans('dictionary.back') }}</a></label>
	</div>
@endsection
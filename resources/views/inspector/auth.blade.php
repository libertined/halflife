@extends('layouts.inspector')

@section('content')
	<div class="h1"><h1>{{ trans('dictionary.h1_buy') }}</h1></div>
	<div class="active-form" id="auth">
		<div class="io">
			<input type="hidden" name="auth[action]" value="auth">
			<label><input type="text" name="auth[nic]" value="" placeholder="{{ trans('dictionary.nic_plh') }}"></label>
			<label><input type="password" name="auth[passw]" value="" placeholder="{{ trans('dictionary.passw_plh') }}"></label>
			<div class="forgot"><a href="#">{{ trans('dictionary.forgot_passw') }}</a><span>?</span></div>
			<p class="error switch2"></p>
		</div>
		<div class="sms-code">
			<p class="switch1">{{ trans('dictionary.sms_code_info') }}</p>
			<label><input type="text" name="auth[smscode]" value="" placeholder="{{ trans('dictionary.sms_plh') }}"></label>
		</div>
		<label class="go-on"><a href="#" class="art-button play-button">&raquo;</a></label>
	</div>
@endsection
@extends('layouts.main')

@section('content')
	<div class="h1"><h1>Оплата проезда</h1></div>
	<div class="active-form" id="buy">
		<div class="io">
			<p>Информация</p>
			<input type="hidden" name="buy[bus]" value="{id}">
			<p class="p-large">Автобус №34</p>
			<p class="p-large">Стоимость: 31 уб</p>
		</div>
		<label class="go-on"><a href="#" class="art-button btn-large">Оплатить</a></label>
	</div>
@endsection

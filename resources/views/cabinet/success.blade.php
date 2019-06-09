@extends('layouts.main')

@section('content')s
	<div class="ticket-wrap">
		<div style="margin-top: 50px; font-size: 30px">Валидность:<br> <strong>{{ $valid ? "Валидный" : "Ошибка" }}</strong></div>
	</div>
@endsection

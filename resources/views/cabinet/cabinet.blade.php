@extends('layouts.main')

@section('content')
	<div class="quatro">
		<div class="quatro-ticket"><a href="/ticket/"></a><span class="no-ticket">Нет билета</span></div>
		<div class="quatro-balance"><a href="#"></a><span>1000.00 {{ trans('dictionary.rub') }}<br>на счету</span></div>
		<div class="quatro-pay"><a href="/scan/"></a><span>{{ trans('dictionary.sbm_getscan') }}</span></div>
		<div class="quatro-details"><a href="/details/"></a><span>Расходы за месяц</span></div>
	</div>
	<div class="exit-button"><a href="/logout" class="exit art-button btn-large">{{ trans('dictionary.exit') }}</a></div>
@endsection

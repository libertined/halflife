@extends('layouts.main')

@section('content')
	<div class="quatro">
        @if(!empty($transaction))
            <div class="quatro-ticket">
                <a href="{{ route('pay.ticket', ['transaction' => $transaction->id, 'signature' => $transaction->getSignature()]) }}"></a>
                <span class="no-ticket">
                    {{ $transaction->transport->type->title }} №{{ $transaction->transport->route->number }}
                </span>
            </div>
        @else
            <div class="quatro-ticket">
                <a href="#"></a>
                <span class="no-ticket">Нет билета</span>
            </div>
        @endif

		<div class="quatro-balance"><a href="#"></a><span>1000.00 {{ trans('dictionary.rub') }}<br>на счету</span></div>
		<div class="quatro-pay"><a href="{{ route('scan') }}"></a><span>{{ trans('dictionary.sbm_getscan') }}</span></div>
		<div class="quatro-details"><a href="/details/"></a><span>Расходы за месяц</span></div>
	</div>
	<div class="exit-button">
        <a href="{{ route('logout') }}" class="exit art-button btn-large">{{ trans('dictionary.exit') }}</a>
    </div>
@endsection

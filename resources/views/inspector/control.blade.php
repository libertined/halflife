@extends('layouts.main')

@section('content')
	<div class="scan">
		<div class="scan-text">{{ trans('dictionary.scan_info_control') }}</div>
		<div class="scan-window" id="mainbody">
			<div id="outdiv"> </div>
			<div id="result"></div>
		</div>
	</div>
	<div class="exit-button"><a href="#" class="exit">{{ trans('dictionary.exit') }}</a></div>
@endsection
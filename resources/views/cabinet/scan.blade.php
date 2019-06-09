@extends('layouts.main')

@section('content')
	<div class="scan">
		<div class="scan-text">{{ trans('dictionary.scan_info') }}</div>
		<div class="scan-window" id="mainbody">
			<div id="outdiv"> </div>
		</div>
	</div>
	<div><a href="/" class="art-button btn-small">{{ trans('dictionary.scan_cancel') }}</a></div>
	<canvas id="qr-canvas" width="800" height="600"></canvas>
	<script type="text/javascript">load();</script>
@endsection
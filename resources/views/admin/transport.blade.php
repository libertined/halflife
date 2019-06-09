@extends('layouts.admin_main')

@section('content')
	<div class="search-container">
		<form action="" method="">
			<input type="hidden" name="route">
			<input type="text" name="" class="search" placeholder="Введите название...">
			<input type="submit" name="search" value="" class="find">
		</form>
		<div class="add" id='add'></div>
	</div>

	<div class="table-container">
		@foreach ($transports as $transport)
			<div class="row">
				<div class="text">
					{{ $transport->id }}<br>
					{{ $transport->number }}<br>
					{{ $transport->type->title }}<br>
					{{ $transport->route->number }}<br>
				</div>
				<div class="edit"></div>
				<div class="delete"></div>
				<div class="qr-btn">{{ route('admin.qr.generate', ["transport_id" => $transport->id]) }}</div>
			</div>
		@endforeach
	</div>
	<div>
		{{ $transports->links() }}
	</div>
@endsection
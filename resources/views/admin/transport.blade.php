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
					<div class="td id">{{ $transport->id }}</div>
					<div class="td number">{{ $transport->number }}</div>
					<div class="td type">{{ $transport->type->title }}</div>
					<div class="td route">{{ $transport->route->number }}</div>
				</div>
				<div class="edit"></div>
				<div class="delete"></div>
				<a href={{ route('admin.qr.generate', ["transport_id" => $transport->id]) }}><div class="qr-btn"></div></a>
			</div>
		@endforeach
	</div>
	<div>
		{{ $transports->links() }}
	</div>
@endsection
@extends('layouts.inspector')

@section('content')
	<table width="100%">
		<tr>
			<th>ID</th>
			<th>Номер</th>
			<th>Тип</th>
			<th>Номер маршрута</th>
			<th>QR</th>
		</tr>
	@foreach ($transports as $transport)
		<tr>
			<td>{{ $transport->id }}</td>
			<td>{{ $transport->number }}</td>
			<td>{{ $transport->type->title }}</td>
			<td>{{ $transport->route->number }}</td>
			<td>{{ route('admin.qr.generate', ["transport_id" => $transport->id]) }}</td>
		</tr>
	@endforeach
	</table>
	<div>
		{{ $transports->links() }}
	</div>
@endsection
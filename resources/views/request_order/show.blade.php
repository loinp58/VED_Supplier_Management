@extends('layout.layout')

@section ('head.title')
	<title> Yêu cầu mua hàng</title>
@stop

@section('body.content')
<script>
	document.getElementById('section-title').innerHTML = 'Yêu cầu mua hàng';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{ route("request_order.index") }}">Yêu cầu mua hàng</a></li>';
	document.getElementById('breadcum').innerHTML += '<li class="active">{{ $requestOrder->code }}</li>';
</script>
<div class="container-fluid">
	<a href="{{ route('request_order.create') }}">
		<button class="btn btn-success create-new">
			Export
		</button>
	</a>
	<a href="{{ route('request_order.edit', $requestOrder->id) }}">
		<button class="btn btn-primary create-new">
			Sửa
		</button>
	</a>
	{!! Form::open([
		'route' => [ 'request_order.destroy', $requestOrder->id ],
						'method' => 'delete',
						'style' => 'display: inline'
					])
	!!}
	<button class="btn btn-danger" style="vertical-align: top">Delete</button>
	{!! Form::close() !!}
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
					<thead>
						<tr>
							<th> Mã yêu cầu  </th>
							<th> Đơn vị yêu cầu </th>
							<th> Ngày tạo </th>
							<th> Ngày hoàn thành </th>
							<th> Trạng thái </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ $requestOrder->code}}</td>
							<td>{{ $requestOrder->department }}</td>
							<td>{{ $requestOrder->create_day }}</td>
							<td>{{ $requestOrder->deadline_complete }}</td>
							<td id="stateColor" style="font-weight: bold; color: #d9534f;">{{ $requestOrder->status_complete }}</td>
						</tr>
					</tbody>
					</table>
					<script>
						var state = document.getElementById('stateColor').innerHTML;
						if (state == "Completed") document.getElementById('stateColor').style.color = "#5cb85c";
					</script>
		</div>
	</div>
</div>

@endsection
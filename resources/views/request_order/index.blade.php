@extends('layout.layout')

@section ('head.title')
<title> Yêu cầu mua hàng</title>
@stop

@section('body.content')
<script>
	document.getElementById('section-title').innerHTML = 'Yêu cầu mua hàng';
	document.getElementById('breadcum').innerHTML += '<li class="active">Yêu cầu mua hàng</li>';
</script>
<div class="container-fluid">
	<a href="{{ route('request_order.create') }}">
		<button class="btn btn-primary create-new">
			Thêm mới
		</button>
	</a>
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
						<th style="width: 30%"> Thao tác </th>
					</tr>
				</thead>
				<tbody>
					@foreach($requestOrders as $key=>$order_request)
					<tr>
						<td>{{ $order_request->code}}</td>
						<td>{{ $order_request->department }}</td>
						<td>{{ $order_request->create_day }}</td>
						<td>{{ $order_request->deadline_complete }}</td>
						<td id="{{$key}}" style="font-weight: bold; color: #d9534f;">{{ $order_request->status_complete }}</td>
						<script>
							var state = document.getElementById('{{$key}}').innerHTML;
							if (state == "Completed") document.getElementById('{{$key}}').style.color = "#5cb85c";
						</script>
						<td>
							<a href="{{route('request_order.show', $order_request->id)}}">
								<button class="btn btn-primary">Details</button>
							</a>
							<a href="{{route('request_order.edit', $order_request->id)}}">
								<button class="btn btn-success">Edit</button>
							</a>
							{!! Form::open([
							'route' => [ 'request_order.destroy', $order_request->id ],
							'method' => 'DELETE',
							'style' => 'display: inline'
							])
							!!}
							<button class="btn btn-danger" style="vertical-align: top">Delete</button>
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-6 col-md-offset-4">
			{!! $requestOrders->render() !!}
		</div>
	</div>
</div>

@endsection
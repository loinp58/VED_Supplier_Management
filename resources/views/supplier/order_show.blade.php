@extends ('layout/layout')

@section ('head.title')
<title>Supplier Management</title>
@stop

@section ('body.content')
<script>
	document.getElementById('section-title').innerHTML = '{{$supplier->name}}';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{url("/suppliers")}}">Nhà cung cấp</a></li>';
	document.getElementById('breadcum').innerHTML += '<li class="active">{{$supplier->name}}</li>';
</script>
<div class="container-fluid">
	<a href="{{ route('supplier.edit', $supplier->id) }}">
		<button class="btn btn-success create-new" style="vertical-align: top;">
			Sửa đổi thông tin
		</button>
	</a>
	{!! Form::open([
			'route' => [ 'supplier.destroy', $supplier->id ],
			'method' => 'DELETE',
			'style' => 'display: inline'
		])
	!!}
	<button class="btn btn-danger">Xóa</button>
	{!! Form::close() !!}
	<a href="{{ route('supplier.show', $supplier->id) }}">
		<button class="btn btn-warning create-new" style="vertical-align: top;">
			Các sản phẩm của nhà cung cấp
		</button>
	</a>
	<div class="row">
		<div class="col-md-12">
			<div class="lists">
				<div class="list-title">
					Thông tin chung:
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Mã</th>
							<th>Đại diện</th>
							<th>Phone</th>
							<th>Địa chỉ</th>
							<th>Fax</th>
							<th>Ghi chú</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ $supplier->code                }} </td>
							<td>{{ $supplier->person_contact_name }} </td>
							<td>{{ $supplier->phone               }} </td>
							<td>{{ $supplier->address             }} </td>
							<td>{{ $supplier->fax                 }} </td>
							<td>{{ $supplier->note                }} </td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="lists">
				<div class="list-title">
					Danh sách hóa đơn
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th> Mã đơn hàng </th>
							<th> Ngày tạo  </th>
							<th> Hạn thanh toán </th>
							<th> Tổng tiền </th>
							<th> Trạng thái </th>
							<th> Điểm đánh giá </th>
						</tr>
					</thead>
					<tbody>
						@foreach ($orders as $order)
						<tr>
							<td>{{ $order->code              }} </td>
							<td>{{ $order->create_at_request }} </td>
							<td>{{ $order->deadline_payment  }} </td>
							<td>{{ $order->total             }} </td>
							<td>{{ $order->score_evaluation  }} </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-6 col-md-offset-4">
			{!! $orders->render() !!}
		</div>
	</div>
</div>
@stop
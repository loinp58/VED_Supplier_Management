@extends ('layout/layout')

@section ('head.title')
<title>Supplier Management</title>
@stop

@section ('body.content')
<script>
	document.getElementById('section-title').innerHTML = 'Danh mục nhà cung cấp';
	document.getElementById('breadcum').innerHTML += '<li class="active">Danh sách nhà cung cấp</li>';
</script>
<div class="container-fluid">
	<a href="{{ route('supplier.create') }}">
		<button class="btn btn-primary create-new">
			Thêm mới
		</button>
	</a>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped" style="text-align: center;">
				<thead>
					<tr>
						<th>Mã            </th>
						<th>Nhà cung cấp  </th>
						<th>Số điện thoại </th>
						<th>Địa chỉ       </th>
						<th>Số đơn hàng   </th>
						<th>Thao tác      </th>
					</tr>
				</thead>
				<tbody>
					@foreach($suppliers as $supplier)
					<tr>
						<td> {{$supplier->code }}                     </td>
						<td> {{$supplier->name }}                     </td>
						<td> {{$supplier->phone }}                    </td>
						<td> {{$supplier->address }}                  </td>
						<td style="width: 10%;"> {{$supplier->count}} </td>
						<td style="width: 25%;">
							<a href="{{ route('supplier.show', $supplier->id) }}">
								<button class="btn btn-primary">Details</button>
							</a>
							<a href="{{ route('supplier.edit', $supplier->id) }}">
								<button class="btn btn-success">Edit</button>
							</a>
							{!! Form::open([
									'route' => [ 'supplier.destroy', $supplier->id ],
									'method' => 'DELETE',
									'style' => 'display: inline'
								])
							!!}
							<button class="btn btn-danger">Delete</button>
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-6 col-md-offset-4">
			{!! $suppliers->render() !!}
		</div>
	</div>
</div>
@stop
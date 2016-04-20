@extends ('layout/layout')

@section ('head.title')
<title>Supplier Management</title>
@stop

@section ('body.content')
<script>
	document.getElementById('section-title').innerHTML = '{{$supplier->TEN_NHA_CUNG_CAP}}';
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
	<a href="{{ route('order_supplier.show', $supplier->id) }}">
		<button class="btn btn-success create-new" style="vertical-align: top;">
			Sửa đổi thông tin
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
					Danh mục sản phẩm:
				</div>
				<a href="{{ route('product.create', $supplier->id) }}">
					<button class="btn btn-primary create-new" style="vertical-align: top;">
						Thêm mới
					</button>
				</a>
					{!! Form::open([
							'route' => [ 'product.destroyAll', $supplier->id ],
							'method' => 'DELETE',
							'style' => 'display: inline'
						])
					!!}
					<button class="btn btn-danger">Xóa toàn bộ</button>
				{!! Form::close() !!}
				<table class="table table-striped">
					<thead>
						<tr>
							<th> Mã sản phẩm </th>
							<th> Tên sản phẩm  </th>
							<th> Mô tả </th>
							<th> Ghi chú </th>
							<th> </th>
						</tr>
					</thead>
					<tbody>
						@foreach ($products as $product)
						<tr>
							<td>{{ $product->code        }} </td>
							<td>{{ $product->name        }} </td>
							<td>{{ $product->description }} </td>
							<td>{{ $product->note        }} </td>
							<td style="width: 20%;">
								<div class="row pull-right" style="margin-right: 10px">
									<a href="{{ route('product.edit', [$supplier->id, $product->id]) }} ">
										<button class="btn btn-success create-new" style="vertical-align: top;margin-bottom: 0">
											Sửa
										</button>
									</a>
									{!! Form::open([
									'route' => [ 'product.destroy', $supplier->id, $product->id],
									'method' => 'DELETE',
									'style' => 'display: inline'
									])
									!!}
									<button class="btn btn-danger" style="margin-bottom: 0">Xóa</button>
									{!! Form::close() !!}
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-6 col-md-offset-4">
			{!! $products->render() !!}
		</div>
	</div>
</div>
@stop
@extends ('layout/layout')

@section ('head.title')
	<title>Thêm sản phẩm mới</title>
@stop

@section ('body.content')
<script>
	document.getElementById('section-title').innerHTML = 'Sửa thông tin sản phẩm';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{ route("supplier.index") }}"> Nhà cung cấp </a></li>';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{ route("supplier.show", $supplier->id) }}"> {{$supplier->name}} </a></li>';
	document.getElementById('breadcum').innerHTML += '<li class="active">Sửa đổi thông tin</li>';
</script>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

					{!! Form::model($product, [
							'route' => ['product.update', $supplier->id, $product->id],
							'method' => 'PUT',
							'class' => 'form-horizontal',
						])
					!!}

					<div class="form-group">
						{!! Form::label('code', 'Mã sản phẩm', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('code', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('name', 'Tên sản phẩm', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('name', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('description', 'Mô tả', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('description', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('note', 'Ghi chú', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('note', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Sửa', [ 'class' => 'btn btn-primary pull-right' ])!!}
					</div>
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop
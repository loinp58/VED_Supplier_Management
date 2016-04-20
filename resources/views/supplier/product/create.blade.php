@extends ('layout/layout')

@section ('head.title')
	<title>Thêm sản phẩm mới</title>
@stop

@section ('body.content')
<script>
	document.getElementById('section-title').innerHTML = 'Thêm sản phẩm cho {{$supplier->name}}';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{url("/suppliers")}}">Nhà cung cấp</a></li>';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{ route("supplier.show", $supplier->id) }}">{{$supplier->name}}</a></li>';
	document.getElementById('breadcum').innerHTML += '<li class="active">Thêm sản phẩm</li>';
</script>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

					{!! Form::open([
							'route' => ['product.store', $supplier->id],
							'method' => 'POST',
							'class' => 'form-horizontal',
						])
					!!}

					<div class="form-group">
						{!! Form::label('code', 'Mã sản phẩm', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('code', '', [ 'class' => 'form-control', 'required', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('name', 'Tên sản phẩm', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('name', '', [ 'class' => 'form-control', 'required', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('description', 'Mô tả', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('description', '', [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('note', 'Ghi chú', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('note', '', [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('Products', 'Hoặc thêm sản phẩm bằng file', [ 'class' => 'control-label']) !!}
						{!! Form::file('Products', '', ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Thêm', [ 'class' => 'btn btn-primary pull-right' ])!!}
					</div>
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop
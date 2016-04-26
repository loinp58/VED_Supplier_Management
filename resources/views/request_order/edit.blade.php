@extends ('layout/layout')

@section ('head.title')
	<title>Yêu cầu mua hàng</title>
@stop

@section ('body.content')
<script>
	document.getElementById('section-title').innerHTML = 'Yêu cầu mua hàng: {{$requestOrder->code}}';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{ route("request_order.index") }}">Yêu cầu mua hàng</a></li>';
	document.getElementById('breadcum').innerHTML += '<li class="active">{{$requestOrder->code}}</li>';
</script>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

					{!! Form::model($requestOrder, [
							'route' => ['request_order.update', $requestOrder->id],
							'method' => 'PUT',
							'class' => 'form-horizontal',
							'enctype' => 'multipart/form-data'
						])
					!!}

					<div class="form-group">
						{!! Form::label('code', 'Mã yêu cầu ', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('code', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('department', 'Đơn vị yêu cầu ', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('department', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('productList', 'Danh mục sản phẩm', [ 'class' => 'control-label']) !!}
						{!! Form::file('productList', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Sửa yêu cầu', [ 'class' => 'btn btn-primary pull-right' ])!!}
					</div>
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop
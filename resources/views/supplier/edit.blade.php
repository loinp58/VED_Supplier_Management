@extends ('layout/layout')

@section ('head.title')
	<title>Sửa đổi thông tin nhà cung cấp</title>
@stop

@section ('body.content')
<script>
	document.getElementById('section-title').innerHTML = '{{$supplier->name}}';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{url("/suppliers")}}">Nhà cung cấp</a></li>';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{ route("supplier.show", $supplier->id) }}">{{$supplier->name}}</a></li>';
	document.getElementById('breadcum').innerHTML += '<li class="active">Sửa</li>';
</script>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				{!! Form::model($supplier, [
						'route' => ['supplier.update', $supplier->id],
						'method' => 'PUT',
						'enctype' => 'multipart/form-data',
						'class' => 'form-horizontal'
					])
				!!}

					<div class="form-group">
						{!! Form::label('code', 'Mã nhà cung cấp', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('code', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('name', 'Tên nhà cung cấp', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('name', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('person_contact_name', 'Tên người liên hệ', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('person_contact_name', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('phone', 'Số điện thoại', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('phone', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('address', 'Địa chỉ', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('address', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('fax', 'Fax', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('fax', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('note', 'Ghi chú', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('note', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('Product', 'Danh mục sản phẩm', [ 'class' => 'control-label']) !!}
						{!! Form::file('Product', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Sửa', [ 'class' => 'btn btn-primary pull-right' ])!!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop
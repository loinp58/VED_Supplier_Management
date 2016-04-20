@extends ('layout/layout')

@section ('head.title')
	<title>Thêm nhà cung cấp</title>
@stop

@section ('body.content')
<script>
	document.getElementById('section-title').innerHTML = 'Thêm nhà cung cấp mới';
	document.getElementById('breadcum').innerHTML += '<li><a href="{{url("/suppliers")}}">Suppliers</a></li>';
	document.getElementById('breadcum').innerHTML += '<li class="active">Create</li>';
</script>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

					{!! Form::open([
							'route' => ['supplier.store'],
							'method' => 'POST',
							'class' => 'form-horizontal',
							'enctype' => 'multipart/form-data'
						])
					!!}

					<div class="form-group">
						{!! Form::label('code', 'Mã nhà cung cấp', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('code', '', [ 'class' => 'form-control', 'required', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('name', 'Tên nhà cung cấp', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('name', '', [ 'class' => 'form-control', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('person_contact_name', 'Tên người liên hệ', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('person_contact_name', '', [ 'class' => 'form-control', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('phone', 'Số điện thoại', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('phone', '', [ 'class' => 'form-control', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('address', 'Địa chỉ', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('address', '', [ 'class' => 'form-control', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('fax', 'Fax', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('fax', '', [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('note', 'Ghi chú', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('note', '', [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Thêm', [ 'class' => 'btn btn-primary pull-right' ])!!}
					</div>
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@yield('head.title')
	<link rel="stylesheet" href="/stylesheets/bootstrap.min.css">
	<link rel="stylesheet" href="/stylesheets/style.css">
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="brand" href="{{url('/')}}"><img class="img-responsive center-block" src="{{url('/icons/ved.png')}}"></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a class="app-name">Supplier Management</a></li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search" action="">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Tìm kiếm ">
		        </div>
		        <button type="submit" class="btn btn-default">Search</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wellcome, Đông đẹp trai <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">History</a></li>
		            <li><a href="#">Edit account</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="{{url('/logout')}}">Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2" style="padding-right: 0">
				<div class="list-group">
				  <a href="#" class="list-group-item">
				    Lịch sử
				  </a>
				  <a href="{{url('/order-requests')}}" class="list-group-item">Yêu cầu mua hàng</a>
				  <a href="{{url('/orders')}}" class="list-group-item">Quản lý đơn hàng</a>
				  <a href="{{url('/suppliers')}}" class="list-group-item">Quản lý nhà cung cấp</a>
				  <a href="#" class="list-group-item">Thống kê, báo cáo</a>
				</div>
			</div>
			<div class="col-md-10" style="padding-left: 0">
				<ol class="breadcrumb" id="breadcum">
				  <li><a href="{{url('/')}}">Trang chủ</a></li>
				</ol>
				<h2 style="text-align: center" id="section-title"></h2>
				<br/>
				<div class="app-content">
					@yield('body.content')
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
	</div>
	<script src="/javascripts/jquery.js"></script>
	<script src="/javascripts/bootstrap.min.js"></script>
</body>
</html>
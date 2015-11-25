<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<section class="content">
	<div class="row">
	<div class="cool-md-4">
	<div class="box box-info">
	<div class="box-header with-border">
	<span style="font-size: 25px;"><i class="fa fa-user"></i> Hello, {{$name}}!</span><br>
	<span>Use this email and password to login your account</span>
	</div>
	<div class="box-body">
		<strong><span style="font-size: 18px;"><i class="fa fa-envolve margin r-5"></i> E-mail</span></strong>
		<p class="text-muted">{{$email}}</p>
	<hr>
	<strong><span style="font-size: 18px;"><i class="fa fa-envolve margin r-5"></i> Password</span></strong>
		<p class="text-muted">{{$password}}</p>
	<hr>
	<strong><span style="font-size: 18px;"><i class="fa fa-envolve margin r-5"></i> Status</span></strong>
	@if ($status == "Y")
	<p class="text-muted">Activated</p>
	@elseif ($status== "N")
	<p class="text-muted">Not Activated</p>
	@endif
	</div>
	<div class="box-footer">
		<a href="{{ $url.'/'.'login'}}" class="btn btn-flat btn-block btn-primary">Login</a>
	</div>
	</div>	
	</div>	
	</div>
</section>
</body>
</html>
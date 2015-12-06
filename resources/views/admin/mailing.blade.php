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
	<span>Click this link to verify your Jobstalker account</span>
	</div>
	<div class="box-footer">
		<a href="{{ url('user'.'/'.$username.'/'.'verify'.'/'.$token) }}">Click this link</a>
	</div>
	</div>	
	</div>	
	</div>
</section>
</body>
</html>
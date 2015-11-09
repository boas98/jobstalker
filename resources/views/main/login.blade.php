<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Log In - Jobstalker</title>
@include('main.lib')
</head>
<body class="grey lighten-5">
<div class="login-page">
<div class="card-panel" style="padding-bottom:5px">
<div class="pict-img blue darken-2">
<i class="material-icons md-96 white-text">&#xE853;</i>
</div>
<div class="row">
<form action="{{ url('login') }}" method="post" class="col s12">
{!! csrf_field() !!}
<div class="row">
<div class="input-field col s12">
<i class="material-icons prefix">&#xE86C;</i>
<input id="username" type="text" name="username" class="validate">
<label for="username">Username</label>
</div>
<div class="input-field col s12">
<i class="material-icons prefix">&#xE897;</i>
<input id="password" type="password" name="password" class="validate">
<label for="password">Password</label>
</div>
<div class="input-field col s12">
<button type="submit" class="btn-block btn waves-effect waves-light blue darken-2" style="width:100%">Log In</button>
</div>
<div class="input-field col s12">
<input type="checkbox" name="remember" class="filled-in" id="filled-in-box" checked="checked" />
<label for="filled-in-box">Keep me logged in</label>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>

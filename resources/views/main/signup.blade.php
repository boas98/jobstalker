<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up - Jobstalker</title>
@include('main.lib')
</head>
<body class="grey lighten-5">
<div class="signup-page">
<div class="card-panel" style="padding-bottom:5px">
<div class="pict-img blue darken-2">
<i class="material-icons md-96 white-text">&#xE853;</i>
</div>
<div class="row">
<form action="{{ url('signup') }}" method="post" class="col s12">
{!! csrf_field() !!}
<div class="row">
<div class="input-field col s12">
<i class="material-icons prefix">face</i>
<input id="name" type="text" name="name" class="validate">
<label for="name">Name</label>
</div>
<div class="input-field col s12">
<i class="material-icons prefix">&#xE86C;</i>
<input id="username" type="text" name="username" class="validate">
<label for="username">Username</label>
</div>
<div class="input-field col s12">
<i class="material-icons prefix">email</i>
<input id="email" type="email" name="email" class="validate">
<label for="email">Email</label>
</div>
<div class="input-field col s12">
<i class="material-icons prefix">&#xE897;</i>
<input id="password" type="password" name="password" class="validate">
<label for="password">Password</label>
</div>
<div class="input-field col s12" style="margin-top:0">
<input type="checkbox" name="remember" class="filled-in" id="filled-in-box" />
<label for="filled-in-box">I agree the terms and condition</label>
</div>
<div class="input-field col s12" style="margin-top:40px">
<button type="submit" class="btn-block btn waves-effect waves-light blue darken-2" style="width:100%">Sign Up</button>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Create your Jobstalker account</title>
@include('main.lib')
</head>
<body class="grey lighten-5">
      <nav class="white z-depth-0">
        <div class="nav-wrapper container">
          <a href="{{ url() }}" class="brand-logo blue-text text-darken-2">Jobstalker</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse blue-text text-darken-2"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('login') }}" class="waves-effect waves-light blue darken-2">Log in</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="{{ url('login') }}" class="waves-effect waves-blue">Log in</a></li>
          </ul>
        </div>
      </nav>
      <h4 class="light center" style="margin-top:45px">Create your Jobstalker account</h4>
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
<i class="material-icons prefix">&#xE87C;</i>
<input id="name" type="text" name="name" class="validate">
<label for="name">Name</label>
</div>
<div class="input-field col s12">
<i class="material-icons prefix">&#xE0BE;</i>
<input id="email" type="email" name="email" class="validate">
<label for="email">Email</label>
</div>
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
<div class="input-field col s12" style="margin-top:0">
<input type="checkbox" name="remember" class="filled-in" id="filled-in-box" />
<label for="filled-in-box">I agree to the Jobstalker Terms of Service and Privacy Policy</label>
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

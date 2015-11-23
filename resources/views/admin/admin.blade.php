<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin - Jobstalker Admin Page</title>
@include('admin.lib')
</head>
<body class="grey lighten-5">
@include('admin.menu')
<main>
<div class="section no-pad-bot white z-depth-1">
<div class="container">
<div class="row">
<div class="col s6" style="margin-top:-25px;margin-bottom:15px">
<h4 class="header grey-text text-darken-4">Admin</h4>
</div>
<div class="col s6">
<ol class="breadcrumb right-align">
<li class="blue-text">
<a href="{{ url('/') }}">Dashboard<i class="material-icons right">&#xE5CC;</i></a>
</li>
<li class="active">
<strong>Admin</strong>
</li>
</ol>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="section col s12 m9 l12">
<div class="card-panel">
<div class="row" style="margin-bottom:0">
<div class="input-field col s6">
<a href="#addlabel" class="btn waves-effect waves-light blue darken-2">Add admin</a>
</div>
<div class="input-field col s6">
<form action="{{ url('p/category/search') }}" method="get">
<i class="material-icons prefix">&#xE8B6;</i>
<input id="search_label" type="text" class="validate" name="search_category">
<label for="search_label">Search admin</label>
</form>
</div>
</div>
<table class="striped centered responsive-table">
        <thead>
          <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Username</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1.</td>
            <td>Eclair</td>
            <td>Eclair</td>
            <td>Some action</td>
          </tr>
        </tbody>
      </table>
</div>
</div>
</div>
</div>
</main>
</body>
</html>

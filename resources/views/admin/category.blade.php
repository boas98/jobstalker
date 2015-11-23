<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Category - Jobstalker Admin Page</title>
@include('admin.lib')
</head>
<body class="grey lighten-5">
@include('admin.menu')
<main>
<div class="section no-pad-bot white z-depth-1">
<div class="container">
<div class="row">
<div class="col s6" style="margin-top:-25px;margin-bottom:15px">
<h4 class="header grey-text text-darken-4">Category</h4>
</div>
<div class="col s6">
<ol class="breadcrumb right-align">
<li class="blue-text">
<a href="{{ url('/') }}">Dashboard<i class="material-icons right">&#xE5CC;</i></a>
</li>
<li class="active">
<strong>Category</strong>
</li>
</ol>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
  <div id="addcat" class="modal">
    <div class="modal-content" style="margin-bottom:0">
      <h4>Add Category</h4>
      <div class="row" style="margin-bottom:0">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">First Name</label>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <button class="waves-effect waves-blue btn-flat">Save</button>
      <a href="#!" class=" modal-action modal-close waves-effect waves-dark btn-flat">Cancel</a>
    </div>
  </div>
<div class="section col s12 m9 l12">
<div class="card-panel">
<div class="row" style="margin-bottom:0">
<div class="input-field col s6">
<a href="#addcat" class="btn waves-effect waves-light blue darken-2 modal-trigger">Add category</a>
</div>
<div class="input-field col s6">
<form action="{{ url('p/category/search') }}" method="get">
<i class="material-icons prefix">&#xE8B6;</i>
<input id="search_label" type="text" class="validate" name="search_category">
<label for="search_label">Search category</label>
</form>
</div>
</div>
<table class="striped centered responsive-table">
        <thead>
          <tr>
              <th>No.</th>
              <th>Category</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1.</td>
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

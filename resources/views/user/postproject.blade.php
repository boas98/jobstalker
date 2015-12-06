<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Post a project - Freelancer</title>
@include('user.lib')
<style type="text/css">
.toast{
  background: #F44336;
}
</style>
<script type="text/javascript">
$(function(){
    @foreach($errors->all() as $error)
    Materialize.toast('{{ $error }}', 10000);
    @endforeach
});
</script>
</head>
<body class="grey lighten-3">
@include('user.menu')
      <div class="recomcon">
        <div class="row">
          <div class="col s12 m8">
            <div class="col s12 m12">
              <div class="card-panel" style="overflow:hidden">
                <form action="{{ url('post/project') }}" method="post">
                  {!! csrf_field() !!}
                <div class="input-field col s8">
                  <h5><i class="circle-no blue darken-2">1</i>Select your work category</h5>
                  <select name="category">
                    <option value="" disabled selected>Choose your category</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                </div>
                <div class="input-field col s8">
                  <h5><i class="circle-no blue darken-2">2</i>Write the title of your project</h5>
                </div>
                <div class="input-field col s8">
                  <i class="material-icons prefix">&#xE3C9;</i>
                  <input id="icon_prefix" type="text" name="title" class="validate" value="{{ old('title') }}">
                  <label for="icon_prefix">Project title</label>
                </div>
                <div class="input-field col s8">
                  <h5><i class="circle-no blue darken-2">3</i>Write the description of your project</h5>
                </div>
                <div class="input-field col s8">
                  <i class="material-icons prefix">&#xE3C9;</i>
                  <textarea id="icon_prefix2" name="description" class="materialize-textarea">{{ old('description') }}</textarea>
                  <label for="icon_prefix2">Project description</label>
                </div>
                <div class="input-field col s8">
                  <h5><i class="circle-no blue darken-2">4</i>Write you need the skill of your project</h5>
                </div>
                <div class="input-field col s8">
                  <i class="material-icons prefix">&#xE84E;</i>
                  <input id="icon_prefix3" type="text" name="skill" class="validate" value="{{ old('skill') }}">
                  <label for="icon_prefix3">Project skill (Separate with comma)</label>
                </div>
                <div class="input-field col s8">
                  <h5><i class="circle-no blue darken-2">5</i>Write the budget of your project</h5>
                </div>
                <div class="input-field col s8">
                  <i class="material-icons prefix">&#xE227;</i>
                  <input id="icon_prefix4" type="text" name="budget" class="validate" value="{{ old('budget') }}">
                  <label for="icon_prefix4">Budget</label>
                </div>
                <div class="input-field col s8">
                  <h5><i class="circle-no blue darken-2">6</i>Write the deadline of your project</h5>
                </div>
                <div class="input-field col s8">
                  <i class="material-icons prefix">&#xE01B;</i>
                  <input id="icon_prefix4" type="text" name="deadline" class="validate" value="{{ old('deadline') }}">
                  <label for="icon_prefix4">Deadline (in day)</label>
                </div>
                <div class="input-field col s8">
                  <button class="btn blue darken-2 waves-effect waves-light">Post</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          @include('user.sidebar')
        </div>
      </div>
      @include('footer')
</body>
</html>

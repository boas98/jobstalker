<ul id="menuprofile" class="dropdown-content">
  <li><a href="{{ url('user'.'/'.Auth::user()->username) }}" class="blue-text text-darken-2 waves-effect waves-dark">Profile</a></li>
  <li><a href="{{ url('settings') }}" class="blue-text text-darken-2 waves-effect waves-dark">Setting</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('logout') }}" class="blue-text text-darken-2 waves-effect waves-dark">Log out</a></li>
</ul>
<nav class="blue darken-2 z-depth-0" style="overflow:hidden">
    <div class="nav-wrapper dashcon">
      <a href="{{ url('/') }}" class="brand-logo">Jobstalker</a>
      <ul class="right hide-on-med-and-down">
        <li style="background:red; margin-right:30px; padding:0"><form>
      <div class="input-field">
        <input id="search" type="search" placeholder="Search project and freelancer" required>
        <label for="search"><i class="material-icons">search</i></label>
      </div>
    </form></li>
    <li>
      <a href="{{ url('/') }}" class="waves-effect waves-light">Home</a>
    </li>
    <li>
      <a href="{{ url('user'.'/'.Auth::user()->username) }}" class="waves-effect waves-light"><img src="{{ url('assets/img/user'.'/'.Auth::user()->photo) }}" alt="{{ Auth::user()->name }}" class="pict-auth">{{ Auth::user()->name }}</a>
    </li>
      </ul>
    </div>
  </nav>
  <nav class="white z-depth-0">
      <div class="nav-wrapper dashcon">
          <ul class="left hide-on-med-and-down">
            <li><a href="{{ url('projects') }}" class="waves-effect waves-dark grey-text text-darken-2">My projects</a></li>
            <li><a href="{{ url('messages') }}" class="waves-effect waves-dark grey-text text-darken-2">Messages</a></li>
            <li><a href="{{ url('feedback') }}" class="waves-effect waves-dark grey-text text-darken-2">Feedback</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('post/project') }}" class="blue darken-2 waves-effect waves-light white-text">Post a project</a></li>
            <li>
              <a href="javascript:void(0)" data-activates="menuprofile" class="waves-effect waves-dark dropdown-button grey-text text-darken-2" data-activates="dropdown1"><i class="material-icons">&#xE5D4;</i></a>
            </li>
          </ul>
      </div>
    </nav>

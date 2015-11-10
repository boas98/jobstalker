<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Freelancer</title>
@include('user.lib')
</head>
<body class="grey lighten-3">
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#" class="blue-text text-darken-2 waves-effect waves-dark">Profile</a></li>
    <li><a href="#" class="blue-text text-darken-2 waves-effect waves-dark">Setting</a></li>
    <li class="divider"></li>
    <li><a href="#" class="blue-text text-darken-2 waves-effect waves-dark">Log out</a></li>
  </ul>
  <nav class="blue darken-2 z-depth-0" style="overflow:hidden">
      <div class="nav-wrapper dashcon">
        <a href="#!" class="brand-logo">Jobstalker</a>
        <ul class="right hide-on-med-and-down">
          <li style="background:red; margin-right:30px; padding:0"><form>
        <div class="input-field">
          <input id="search" type="search" placeholder="Search project and freelancer" required>
          <label for="search"><i class="material-icons">search</i></label>
        </div>
      </form></li>
      <li>
        <a href="#" class="waves-effect waves-light">Home</a>
      </li>
      <li>
        <a href="#" class="waves-effect waves-light"><img src="{{ url('assets/pict/1.jpg') }}" alt="Revando" class="pict-auth">Revando</a>
      </li>
        </ul>
      </div>
    </nav>
    <nav class="white z-depth-0">
        <div class="nav-wrapper dashcon">
            <ul class="left hide-on-med-and-down">
              <li><a href="#" class="waves-effect waves-dark grey-text text-darken-2">My projects</a></li>
              <li><a href="#" class="waves-effect waves-dark grey-text text-darken-2">Dashboard</a></li>
              <li><a href="#" class="waves-effect waves-dark grey-text text-darken-2">Inbox</a></li>
              <li><a href="#" class="waves-effect waves-dark grey-text text-darken-2">Feedback</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li><a href="#" class="blue darken-2 waves-effect waves-light white-text">Start a project</a></li>
              <li>
                <a href="javascript:void(0)" data-activates="dropdown1" class="waves-effect waves-dark dropdown-button grey-text text-darken-2" data-activates="dropdown1"><i class="material-icons">&#xE5D4;</i></a>
              </li>
            </ul>
        </div>
      </nav>
      <div class="recomcon">
        <div class="row">
          <div class="col s12 m8">
            <div class="col s12 m12">
              <div class="card">
                <div class="col s12 m3">
                  <div class="circle blue darken-2 center" style="margin:20px; width:120px; height:120px">
                    <i class="material-icons md-80 white-text" style="margin-top:20px">&#xE30C;</i>
                  </div>
                </div>
                <div class="col s12 m9">
                  <div class="card-title" style="margin-top:20px; margin-bottom:10px"><a href="#" class="grey-text text-darken-2">Lorem ipsum dolor sit amet</a></div>
                  <div class="light" style="display:inline-block; margin-right:20px"><i class="material-icons left">&#xE54E;</i>Rp. 400,000</div>
                  <div class="light" style="display:inline-block; margin-right:20px"><i class="material-icons left">&#xE892;</i>Website</div>
                  <div class="light" style="display:inline-block"><i class="material-icons left">&#xE616;</i>4 menit yang lalu</div>
                  <div class="light" style="margin-top:10px">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet...</div>
                </div>
              </div>
            </div>
            <div class="col s12 m12">
              <div class="card">
                <div class="col s12 m3">
                  <div class="circle blue darken-2 center" style="margin:20px; width:120px; height:120px">
                    <i class="material-icons md-80 white-text" style="margin-top:20px">&#xE30C;</i>
                  </div>
                </div>
                <div class="col s12 m9">
                  <div class="card-title" style="margin-top:20px; margin-bottom:10px"><a href="#" class="grey-text text-darken-2">Lorem ipsum dolor sit amet</a></div>
                  <div class="light" style="display:inline-block; margin-right:20px"><i class="material-icons left">&#xE54E;</i>Rp. 400,000</div>
                  <div class="light" style="display:inline-block; margin-right:20px"><i class="material-icons left">&#xE892;</i>Website</div>
                  <div class="light" style="display:inline-block"><i class="material-icons left">&#xE616;</i>4 menit yang lalu</div>
                  <div class="light" style="margin-top:10px">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet...</div>
                </div>
              </div>
            </div>
            <div class="col s12 m12">
              <div class="card">
                <div class="col s12 m3">
                  <div class="circle blue darken-2 center" style="margin:20px; width:120px; height:120px">
                    <i class="material-icons md-80 white-text" style="margin-top:20px">&#xE30C;</i>
                  </div>
                </div>
                <div class="col s12 m9">
                  <div class="card-title" style="margin-top:20px; margin-bottom:10px"><a href="#" class="grey-text text-darken-2">Lorem ipsum dolor sit amet</a></div>
                  <div class="light" style="display:inline-block; margin-right:20px"><i class="material-icons left">&#xE54E;</i>Rp. 400,000</div>
                  <div class="light" style="display:inline-block; margin-right:20px"><i class="material-icons left">&#xE892;</i>Website</div>
                  <div class="light" style="display:inline-block"><i class="material-icons left">&#xE616;</i>4 menit yang lalu</div>
                  <div class="light" style="margin-top:10px">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet...</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
          </div>
        </div>
      </div>
</body>
</html>

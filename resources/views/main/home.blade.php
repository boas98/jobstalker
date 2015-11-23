<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Jobstalker</title>
@include('main.lib')
</head>
<body>
  <div class="navbar-fixed">
      <nav class="blue darken-2">
        <div class="nav-wrapper container">
          <a href="{{ url() }}" class="brand-logo">Jobstalker</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          @if(Auth::user()->role=='0')
          @else
          <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('login') }}" class="waves-effect waves-light">Log in</a></li>
            <li><a href="{{ url('signup') }}" class="waves-effect waves-light">Sign up</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="{{ url('login') }}" class="waves-effect waves-blue">Log in</a></li>
            <li><a href="{{ url('signup') }}" class="waves-effect waves-blue">Sign up</a></li>
          </ul>
          @endif
        </div>
      </nav>
    </div>
    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row">
          <h2 class="shades-text text-white header col s12 m7" style="font-family: 'Roboto', 'Helvetica', 'Arial', sans-serif; font-weight:500">Expert freelancers for your online job.</h2>
            <h5 class="shades-text text-white header light col s12 m7" style="line-height:1.5em">Millions of small businesses use Jobstalker to turn their ideas into reality. Need to get work done? Click 'Hire' to get started!</h5>
            <div class="col s12 m7" style="margin-top:20px">
              <a href="{{ url('signup') }}" id="download-button" class="btn-large waves-effect waves-light blue darken-2">Hire</a>
            </div>
          </div>
          <br><br>

        </div>
      </div>
      <div class="parallax"><img src="{{ url('assets/img/background1.jpg') }}" alt="Unsplashed background img 1"></div>
    </div>
    <div class="grey lighten-4">
    <div class="conjob">
        <h4 class="center" style="margin-bottom:20px">Hire Freelancers and Find Freelance Jobs Online</h4>
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m6">
            <div class="card" style="height:295px">
              <a href="#">
              <div class="card-image waves-effect waves-block waves-light">
                <img src="{{ url('assets/img/sample-1.jpg') }}">
                <span class="card-title" style="bottom:40%; font-size:30px">Card Title</span>
                <span class="card-title" style="bottom:31.5%; font-size:20px">Starting from $90</span>
              </div>
              </a>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card" style="height:295px">
              <a href="#">
              <div class="card-image waves-effect waves-block waves-light">
                <img src="{{ url('assets/img/sample-1.jpg') }}">
                <span class="card-title" style="bottom:40%; font-size:30px">Card Title</span>
                <span class="card-title" style="bottom:31.5%; font-size:20px">Starting from $90</span>
              </div>
              </a>
            </div>
          </div>
        <div class="col s12 m3">
          <div class="card">
            <a href="#">
            <div class="card-image waves-effect waves-block waves-light">
              <img src="{{ url('assets/img/sample-1.jpg') }}">
              <span class="card-title">Card Title</span>
            </div>
            </a>
            <div class="card-content center-align">
              <p>Starting from $90</p>
            </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card">
            <a href="#">
            <div class="card-image waves-effect waves-block waves-light">
              <img src="{{ url('assets/img/sample-1.jpg') }}">
              <span class="card-title">Card Title</span>
            </div>
            </a>
            <div class="card-content center-align">
              <p>Starting from $90</p>
            </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card">
            <a href="#">
            <div class="card-image waves-effect waves-block waves-light">
              <img src="{{ url('assets/img/sample-1.jpg') }}">
              <span class="card-title">Card Title</span>
            </div>
            </a>
            <div class="card-content center-align">
              <p>Starting from $90</p>
            </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card">
            <a href="#">
            <div class="card-image waves-effect waves-block waves-light">
              <img src="{{ url('assets/img/sample-1.jpg') }}">
              <span class="card-title">Card Title</span>
            </div>
            </a>
            <div class="card-content center-align">
              <p>Starting from $90</p>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
    <div id="index-banner" class="parallax-container" style="padding:240px 0">
      <div class="parallax"><img src="{{ url('assets/img/background2.png') }}" alt="Unsplashed background img 1"></div>
    </div>
    <div class="blue-grey darken-4">
      <div class="connew blue-grey darken-4">
        <div class="section">
          <h3 class="shades-text text-white" style="font-weight:200; font-size:45px">The best of Jobstalker built in</h3>
          <p class="shades-text text-white" style="line-height:1.5em; font-weight:200; font-size:24px">Jobstalker works perfectly with your favourite jobs like web design, logo design and many more.</p>
           <a href="{{ url('signup') }}" class="blue-text text-darken-2" style="text-transform:uppercase; font-size:16px">Get started now</a>
        </div>
      </div>
    </div>
    @include('footer')
</body>
</html>

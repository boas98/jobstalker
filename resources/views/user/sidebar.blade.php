<div class="col s12 m4">
  <div class="col s12 m12">
    <div class="card-panel" style="overflow:hidden">
      <div class="col s12 m6">
        <a href="{{ url('user'.'/'.Auth::user()->username) }}">
          <img src="{{ url('assets/img/user'.'/'.Auth::user()->photo) }}" style="width:100%; height:auto">
        </a>
      </div>
      <div class="col s12 m6">
        <h5 class="light">{{ Auth::user()->name }}</h5>
        <a href="{{ url('user'.'/'.Auth::user()->username) }}" class="light blue-text text-darken-2" style="font-size:18px">{{ '@'.Auth::user()->username }}</a>
      </div>
    </div>
  </div>
</div>

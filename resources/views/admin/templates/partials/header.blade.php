<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light navbar-light position-relative">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-start">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">
    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="far fa-user-circle nav-icon"> {{auth()->user()->name}}</span>
      </a>
      <ul class="dropdown-menu">
        <li class="user-footer">
          <div class="">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="btn btn-block btn-danger">Sign Out</a>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
  </ul>

  <!-- fullscreen button -->
  <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li> -->

  <!-- <span class="hidden-xs"> {{auth()->user()->name}}</span> -->



</nav>
<!-- /.navbar -->
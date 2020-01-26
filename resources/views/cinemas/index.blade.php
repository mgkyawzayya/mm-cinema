@extends('layouts.template')
@section('content')
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " id="sectionsNav"
       color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="l">
          MM-Cinema </a>
        <button class="navbar-toggler" data-toggle="collapse" type="button" aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">
              <i class="material-icons">home</i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/now') }}">
              <i class="material-icons">play_arrow</i> Now
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/coming') }}">
              <i class="material-icons">movie</i> Coming
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">local_movies</i> Cinemas
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="{{ url('city/yangon') }}" class="dropdown-item">
                <i class="material-icons">location_city</i> Yangon
              </a>
              <a href="{{ url('city/mandalay') }}" class="dropdown-item">
                <i class="material-icons">location_city</i> Mandalay
              </a>
              <a href="{{ url('city/naypyitaw') }}" class="dropdown-item">
                <i class="material-icons">location_city</i> Nay Pyi Taw
              </a>
              <a href="{{ url('city/pakokku') }}" class="dropdown-item">
                <i class="material-icons">location_city</i> Pakokku
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter header-small" data-parallax="true"
       style="background-image: url('../images/movie.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Movie Ticket Booking</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="row">
        <div class="col-md-12 card">
          <div class="card card-plain card-blog">
            <div class="row">
              <div class="col-md-4">
                <div class="card-header card-header-image">
                  <a href="#pablito">
                    <img class="img card-avatar" src="../images/movie-1.jpg">
                  </a>
                  <div class="colored-shadow" style="background-image: url(&quot;./assets/img/examples/card-blog4.jpg&quot;); opacity: 1;"></div></div>
              </div>
              <div class="col-md-8">
                <h3 class="card-title text-center">
                  <a href="#pablo">JCGV</a>
                </h3>
                <h4 class="card-title">
                  Address -
                </h4>
                <h4 class="card-title">
                  Phone -
                </h4>
                <a href="" class="btn btn-info"> Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection

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
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">
              <i class="material-icons">home</i> Home
            </a>
          </li>
          <li class="nav-item active">
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
       style="background-image: url('images/movie.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Now Showing Movies</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="about-team team-1">
        <div class="row">
          <div class="col-md-3">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="../assets/img/faces/marc.jpg">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Alec Thompson</h4>
                <h6 class="category text-muted">CEO / Co-Founder</h6>
                <p class="card-description">
                  And I love you like Kanye loves Kanye. We need to restart the human foundation.
                </p>
              </div>
              <div class="card-footer justify-content-center">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-github">
                  <i class="fa fa-github"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="../assets/img/faces/kendall.jpg">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Tania Andrew</h4>
                <h6 class="category text-muted">Designer</h6>
                <p class="card-description">
                  Don't be scared of the truth because we need to restart the human foundation. And I
                  love you like Kanye loves Kanye.
                </p>
              </div>
              <div class="card-footer justify-content-center">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-linkedin">
                  <i class="fa fa-linkedin"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="../assets/img/faces/christian.jpg">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Christian Mike</h4>
                <h6 class="category text-muted">Web Developer</h6>
                <p class="card-description">
                  I love you like Kanye loves Kanye. Don't be scared of the truth because we need to
                  restart the human foundation.
                </p>
              </div>
              <div class="card-footer justify-content-center">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i
                    class="fa fa-facebook-square"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i
                    class="fa fa-dribbble"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="../assets/img/faces/avatar.jpg">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Rebecca Stormvile</h4>
                <h6 class="category text-muted">Web Developer</h6>
                <p class="card-description">
                  Don't be scared of the truth because we need to restart the human foundation.
                </p>
              </div>
              <div class="card-footer justify-content-center">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i
                    class="fa fa-google"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i
                    class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i
                    class="fa fa-dribbble"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@extends('layouts.template')
@section('content')
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " id="sectionsNav"
       color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/">
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
                  <a href="{{ url('cinema/yangon') }}" class="dropdown-item">
                      <i class="material-icons">location_city</i> Yangon
                  </a>
                  <a href="{{ url('cinema/mandalay') }}" class="dropdown-item">
                      <i class="material-icons">location_city</i> Mandalay
                  </a>
                  <a href="{{ url('cinema/naypyitaw') }}" class="dropdown-item">
                      <i class="material-icons">location_city</i> Nay Pyi Taw
                  </a>
                  <a href="{{ url('cinema/pakokku') }}" class="dropdown-item">
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
          <h2 class="title">Our Team Members</h2>
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
                  <img class="img" src="{{ url('images/person1.jpg') }}">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Kaung Khant Thu</h4>
                <h6 class="category text-muted">Junior Developer</h6>
              </div>
                <div class="card-footer justify-content-center">
                    <a href="https://twitter.com/KaungKhantThu16" class="btn btn-just-icon btn-link btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://facebook.com/KaungKhantThu001" class="btn btn-just-icon btn-link btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://github.com/kaung-khant-thu" class="btn btn-just-icon btn-link btn-github">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="{{ url('images/person2.jpeg') }}">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Zarni</h4>
                <h6 class="category text-muted">Junior Developer</h6>
              </div>
              <div class="card-footer justify-content-center">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="https://facebook.com/profile.php?id=100028602906619" class="btn btn-just-icon btn-link btn-facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="{{ url('images/person3.jpg') }}">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Han Sat Paing</h4>
                <h6 class="category text-muted">Junior Developer</h6>
              </div>
                <div class="card-footer justify-content-center">
                    <a href="https://facebook.com/hansat.pying" class="btn btn-just-icon btn-link btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="http://github.com/hansatpaing" class="btn btn-just-icon btn-link btn-github">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="{{ url('images/person4.jpeg') }}">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Hanni Aung</h4>
                <h6 class="category text-muted">Junior Developer</h6>
              </div>
                <div class="card-footer justify-content-center">
                    <a href="https://facebook.com/hanni.aung.777" class="btn btn-just-icon btn-link btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

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
              <a href="{{ url('cinemas/yangon') }}" class="dropdown-item">
                <i class="material-icons">location_city</i> Yangon
              </a>
              <a href="{{ url('cinemas/mandalay') }}" class="dropdown-item">
                <i class="material-icons">location_city</i> Mandalay
              </a>
              <a href="{{ url('cinemas/naypyitaw') }}" class="dropdown-item">
                <i class="material-icons">location_city</i> Nay Pyi Taw
              </a>
              <a href="{{ url('cinemas/pakokku') }}" class="dropdown-item">
                <i class="material-icons">location_city</i> Pakokku
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter header-small" data-parallax="true"
       style="background-image: url('public/images/movie.jpg');">
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
        <div class="col-md-12">
          <div class="card card-plain card-blog">
            <div class="row">
              <div class="col-md-4">
                <div class="card-header card-header-image">
                  <a href="">
                    <img class="img" src="{{ asset('/images/movies/'. $movie->photo) }}">
                  </a>
                  <div class="colored-shadow" style="opacity: 1;"></div></div>
              </div>
              <div class="col-md-8">
                <h2 class="card-title">
                   {{ $movie->title}}
                </h2>
                <h4 class="card-title">
                  Directed By - {{ $movie->director }}
                </h4>
                <h4 class="card-title">
                  Cast - {{ $movie->cast }}
                </h4>
                <h4 class="card-title">
                  Address - {{ $cinema->address }}
                </h4>
                <h4 class="card-title">
                  Phone - {{ $cinema->phone }}
                </h4>
                <hr>
                <div class="col-lg-6 col-md-6">
                  <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#loginModal">
                    <i class="material-icons">bookmark</i>
                    Book Now
                    <div class="ripple-container"></div></button>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-login" role="document">
      <div class="modal-content">
        <div class="card card-signup card-plain">
          <div class="modal-header">
            <div class="card-header card-header-primary text-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
              <h4 class="card-title">Book Ticket</h4>
            </div>
          </div>
          <div class="modal-body">
            <form class="form" method="POST" action="{{ url('ticket/store') }}">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">phone</i>
                      </span>
                    </div>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone No">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">event_seat</i>
                      </span>
                    </div>
                    <input type="number" name="seat" class="form-control" placeholder="Number of Seat">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">timer</i>
                      </span>
                    </div>
                    <select id="time" name="time" class="form-control" required>
                      <option value="" label="" selected hidden></option>
                      <option name="time">10:30PM</option>
                      <option name="time">1:00PM</option>
                      <option name="time">4:00PM</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">attach_money</i>
                      </span>
                    </div>
                    <select id="price" name="price" class="form-control" required>
                      <option value=""  label="&nbsp;" selected hidden></option>
                      <option name="price">1200</option>
                      <option name="price">2000</option>
                      <option name="price">2800</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">calendar_today</i>
                      </span>
                    </div>
                    <input type="date" name="date" class="form-control datepicker" placeholder="Date">
                  </div>
                </div>
                  <input type="hidden" value="{{ $cinema->name }}" name="cinema">
                  <input type="hidden" value="{{ $cinema->city }}" name="city">
                  <button type="submit" class="btn btn-success btn-round text-center pull-right">Confirm</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

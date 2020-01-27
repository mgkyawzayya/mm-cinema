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
                    <li class="dropdown nav-item active">
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
            @foreach($cinemas as $cinema)
                <div class="row">
                    <a class="col-md-12 card" href="{{ url('cinemas/'. $cinema->city .'/cinema/show'. $cinema->id) }}">
                        <div class="card card-plain card-blog">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-header card-header-image">
                                        <a href="">
                                            <img class="img card-avatar" src="../images/movie-1.jpg">
                                        </a>
                                        <div class="colored-shadow" style="opacity: 1;"></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="card-title text-center">
                                        <a href="{{ url('cinemas/'. $cinema->city .'/cinema/show'. $cinema->id) }}">{{ $cinema->name }}</a>
                                    </h3>
                                    <h4 class="card-title">
                                        Address - {{ $cinema->address }}
                                    </h4>
                                    <h4 class="card-title">
                                        Phone - {{ $cinema->phone }}
                                    </h4>
                                    <a href="{{ url('cinemas/'. $cinema->city .'/cinema/show'. $cinema->id) }}" class="btn btn-info">Details</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

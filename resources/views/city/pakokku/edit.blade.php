@extends('layouts.dashboard')
@section('content')
    <div class="sidebar" data-color="green" data-background-color="white" data-image="">
        <div class="logo">
            <a href="#" class="simple-text logo-normal">
                MM-Cinema
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        <i class="fa fa-film" aria-hidden="true"></i>
                        <p>Movies</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#yangon">
                        <i class="material-icons">home</i>
                        <p> Yangon
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="yangon">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('yangon/ticket') }}">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sidebar-normal">Ticket</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('yangon/cinema') }}">
                                    <i class="fa fa-film"></i>
                                    <span class="sidebar-normal">Cinema</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" data-toggle="collapse" href="#mandalay">
                        <i class="material-icons">home</i>
                        <p> Mandalay
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="mandalay">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('mandalay/ticket') }}">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sidebar-normal">Ticket</span>
                                </a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('mandalay/cinema') }}">
                                    <i class="fa fa-film"></i>
                                    <span class="sidebar-normal">Cinema</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#naypyitaw">
                        <i class="material-icons">home</i>
                        <p> NayPyiTaw
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="naypyitaw">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('naypyitaw/ticket') }}">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sidebar-normal">Ticket</span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('naypyitaw/cinema') }}">
                                    <i class="fa fa-film"></i>
                                    <span class="sidebar-normal">Cinema</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#pakokku">
                        <i class="material-icons">home</i>
                        <p> Pakokku
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pakokku">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('pakokku/ticket') }}">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sidebar-normal">Ticket</span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('pakokku/cinema') }}">
                                    <i class="fa fa-film"></i>
                                    <span class="sidebar-normal">Cinema</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">Edit Cinema</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('cinema/update') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $cinema->id }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Enter Cinema Name</label>
                                                <input type="text" name="name" value="{{ $cinema->name }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Enter Address</label>
                                                <input type="text" name="address" value="{{ $cinema->address }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Enter Phone</label>
                                                <input type="text" name="phone" value="{{ $cinema->phone }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Enter Movie ID</label>
                                                <input type="number" name="movieId" value="{{ $cinema->movieId }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="photo" value="{{ $cinema->photo }}">
                                    <input type="text" name="city" value="{{ $cinema->city }}" class="form-control">
                                    <button type="submit" class="btn btn-success pull-left">Update</button>
                                    <a href="{{ url('pakokku/cinema') }}" class="btn btn-success pull-right">Back</a>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

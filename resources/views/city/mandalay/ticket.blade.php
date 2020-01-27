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

                            <li class="nav-item ">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('mandalay/ticket') }}">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sidebar-normal">Ticket</span>
                                </a>
                            </li>

                            <li class="nav-item ">
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-success">
                                <h4 class="card-title ">Tickets List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-success">
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Phone
                                        </th>
                                        <th>
                                            Seat
                                        </th>
                                        <th>
                                            Time
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                        </thead>
                                        <tbody>
                                        @foreach( $tickets as $ticket)
                                            <tr>
                                                <td>
                                                    {{ $ticket->name }}
                                                </td>
                                                <td>
                                                    {{ $ticket->phone }}
                                                </td>
                                                <td>
                                                    {{ $ticket->seat }}
                                                </td>
                                                <td>
                                                    {{ $ticket->time }}
                                                </td>
                                                <td>
                                                    {{ $ticket->price }}
                                                </td>
                                                <td>
                                                    {{ $ticket->date }}
                                                </td>
                                                <td class="td-actions">
                                                    <a href="{{ url('/movie/edit/' . $movie->id) }}" class="btn btn-success btn-round">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <form action="{{ url('/movie/destroy/' . $movie->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

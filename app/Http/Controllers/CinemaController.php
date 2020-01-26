<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function index()
    {
        return view('cinemas.index');
    }

    public function show($name , $id)
    {
        return view('cinemas.show');
    }
}

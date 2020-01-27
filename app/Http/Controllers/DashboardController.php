<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $now = DB::table('movies')->where('status', 'now')->get();
        $coming = DB::table('movies')->where('status', 'coming')->get();
        return view('admin.index', [ 'nows' => $now, 'comings' => $coming ]);
    }
}

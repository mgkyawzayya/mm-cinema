<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'now', 'coming']);
    }

    public function index()
    {
        return view('movies.index');
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'director' => 'required',
            'cast' => 'required',
            'date' => 'required',
            'status' => 'required',
            'photo' => 'required',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);


        if ($request->hasfile('photo')) {
            var_dump($request->file('photo'));
            $image = $request->file('photo');
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/images/movies/', $name);

            $movie = new Movie();
            $movie->title = $request->title;
            $movie->director = $request->director;
            $movie->cast = $request->cast;
            $movie->date = $request->date;
            $movie->status = $request->status;
            $movie->photo = $name;
            $movie->save();

            return back()->with('success', 'You created movie successfully.');
        }
    }

    public function edit($id)
    {
        $movie = DB::table('movies')
            ->where('id', $id)
            ->first();
        return view('movies.edit', ['movie' => $movie]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'director' => 'required',
            'cast' => 'required',
            'date' => 'required',
            'status' => 'required',
            'photo' => 'required'
        ]);

        DB::table('movies')->where('id', $request->id )->update([
            'title' => $request->title,
            'director' => $request->director,
            'cast' => $request->cast,
            'date' => $request->date,
            'status' => $request->status,
            'photo' => $request->photo
        ]);

        return back()->withSuccess('Update Success!');
    }
    public function show($id)
    {
        $movie = DB::table('movies')->where('id', $id)->first();
        return view('movies.show', [ 'movie' => $movie ]);
    }

    public function now()
    {
        $movie = DB::table('movies')
            ->where('status', 'now')
            ->get();

        return view('movies.now')->with('movies', $movie);
    }

    public function coming()
    {
        $movie = DB::table('movies')->where('status', 'coming')->get();
        return view('movies.coming',[ "movies" => $movie ]);
    }

    public function destroy($id)
    {
        DB::table('movies')->where('id', $id)->delete();
        return redirect('/dashboard');
    }
}

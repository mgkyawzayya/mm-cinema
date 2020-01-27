<?php

namespace App\Http\Controllers;

use App\Cinema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CinemaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index($city)
    {
        $cinema = DB::table('cinemas')->where('city', $city)->get();
        return view('cinemas.index', ['cinemas' => $cinema]);
    }

    public function show($city, $id)
    {
        $cinema = DB::table('cinemas')->where('id', $id)->get();

        return view('cinemas.show', [ 'cinema' => $cinema ]);
    }

    public function create($city)
    {
        return view('city.' . $city . '.create');
    }

    public function edit($city, $id)
    {
        $cinema = DB::table('cinemas')
            ->where('id', $id)
            ->first();
        return view('city.' . $city . '.edit', ['cinema' => $cinema]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'movieId' => 'required',
            'photo' => 'required',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);


        if ($request->hasfile('photo')) {
            $image = $request->file('photo');
            $name = $image->getClientOriginalName();
            $image->move(public_path() . '/images/cinemas/', $name);

            $cinema = new Cinema();
            $cinema->name = $request->name;
            $cinema->address = $request->address;
            $cinema->phone = $request->phone;
            $cinema->photo = $name;
            $cinema->city = $request->city;
            $cinema->movieId = $request->movieId;
            $cinema->save();

            return back()->with('success', 'You created cinema successfully.');
        }
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'movieId' => 'required',
            'photo' => 'required'
        ]);

        DB::table('cinemas')->where('id', $request->id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'city' => $request->city,
            'movieId' => $request->movieId,
            'photo' => $request->photo
        ]);

        return back()->withSuccess('Update Success!');
    }

    public function cinema($city)
    {
        $cinema = DB::table('cinemas')->where('city', $city)->get();
        return view('city.' . $city . '.index', ['cinemas' => $cinema]);
    }

    public function destroy($city, $id)
    {
        DB::table('cinemas')->where('id', $id)->delete();
        return redirect($city . '/cinema');
    }
}

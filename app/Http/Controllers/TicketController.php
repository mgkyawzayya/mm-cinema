<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index($city)
    {
        $ticket = DB::table('tickets')->where('city', $city)->get();
        return view('city.' . $city. '.ticket', ['tickets' => $ticket]);
    }


    public function edit($id)
    {
        $movie = DB::table('tickets')
            ->where('id', $id)
            ->first();
        return view('city.edit', ['movie' => $movie]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'seat' => 'required',
            'time' => 'required',
            'price' => 'required',
            'date' => 'required',
            'cinema' => 'required',
            'city' => 'required',
        ]);

        $price = 

        $ticket = new Ticket();
        $ticket->name = $request->name;
        $ticket->phone = $request->phone;
        $ticket->seat = $request->seat;
        $ticket->time = $request->date;
        $ticket->price = $request->price * $request->seat;
        $ticket->date = $request->date;
        $ticket->cinema = $request->cinema;
        $ticket->city = $request->city;
        $ticket->save();

        return back()->with('success', 'You Booked successfully.');
    }
}

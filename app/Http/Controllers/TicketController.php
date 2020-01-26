<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'seat' => 'required',
            'time' => 'required',
            'price' => 'required',
            'date' => 'required'
        ]);

        $ticket = new Ticket();
        $ticket->name = $request->name;
        $ticket->director = $request->phone;
        $ticket->seat = $request->seat;
        $ticket->time = $request->date;
        $ticket->price = $request->price * $request->seat;
        $ticket->date = $request->date;
        $ticket->save();

        return back()->with('success', 'You Booked successfully.');
    }
}

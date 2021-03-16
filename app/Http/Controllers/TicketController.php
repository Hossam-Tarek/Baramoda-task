<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use App\Models\Price;
use App\Models\Station;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("tickets.index", [
            "tickets" => Ticket::all(),
            "stations" => Station::all(),
            "prices" => Price::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tickets.create", [
            "stations" => Station::all(),
            "prices" => Price::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "start_station_id" => "required|numeric",
            "end_station_id" => "required|numeric",
            "price_id" => "required|numeric",
            "name" => "required",
            "departure_date" => "required|date"
        ]);

        $passenger = Passenger::where("name", $request->name)->take(1)->get();

        Ticket::create([
            "start_station_id" => $request->start_station_id,
            "end_station_id" => $request->end_station_id,
            "price_id" => $request->price_id,
            "passenger_id" => $passenger[0]->id,
            "departure_date" => $request->departure_date
        ]);

        return redirect(route("tickets.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect(route("tickets.index"));
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tickets = \App\Models\Ticket::all()->count();
    $passengers = \App\Models\Passenger::all()->count();
    $stations = \App\Models\Station::all()->count();
    $prices = \App\Models\Price::all()->count();
    return view('home', [
        "tickets" => $tickets,
        "passengers" => $passengers,
        "stations" => $stations,
        "prices" => $prices
    ]);
});

Route::resource("/prices", \App\Http\Controllers\PriceController::class);
Route::resource("/passengers", \App\Http\Controllers\PassengerController::class);
Route::resource("/stations", \App\Http\Controllers\StationController::class);
Route::resource("/tickets", \App\Http\Controllers\TicketController::class);

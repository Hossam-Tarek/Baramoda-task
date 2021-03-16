<?php

namespace Database\Seeders;

use App\Models\Passenger;
use App\Models\PhoneNumber;
use App\Models\Price;
use App\Models\Station;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Price::factory(3)->create();
        Passenger::factory(3)->create();
        Station::factory(3)->create();
        Ticket::factory(3)->create();
    }
}

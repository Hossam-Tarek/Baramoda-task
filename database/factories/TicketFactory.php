<?php

namespace Database\Factories;

use App\Models\Passenger;
use App\Models\Price;
use App\Models\Station;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "start_station_id" => Station::factory(),
            "end_station_id" => Station::factory(),
            "price_id" => Price::factory(),
            "passenger_id" => Passenger::factory(),
            "departure_date" => $this->faker->date()
        ];
    }
}

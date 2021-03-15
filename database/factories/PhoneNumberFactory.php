<?php

namespace Database\Factories;

use App\Models\Passenger;
use App\Models\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneNumberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhoneNumber::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "phone_number" => $this->faker->unique()->phoneNumber,
            "passenger_id" => Passenger::factory()
        ];
    }
}

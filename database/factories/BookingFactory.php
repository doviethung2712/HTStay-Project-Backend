<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'room_id' => Room::all()->random()->id,
            'bookingDay' => $this->faker->date(),
            'startDay' => $this->faker->date(),
            'endDay' => $this->faker->date(),
            'price'=>rand(100,10000),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingDetailFactory extends Factory
{
    public function definition()
    {
        return [
            'booking_id' => Booking::all()->random()->id,
            'price' => rand(10, 1000),
            'startday' => $this->faker->date(),
            'endday' => $this->faker->date(),
            'room_Id' => Room::all()->random()->id,

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'day' => $this->faker->date(),
        ];
    }
}

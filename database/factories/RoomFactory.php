<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'description' => $this->faker->text(),
            'shortdescription' => $this->faker->text(),
            'category_id' => Category::all()->random()->id,
            'city_id' => City::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}

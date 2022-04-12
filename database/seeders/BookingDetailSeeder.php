<?php

namespace Database\Seeders;

use App\Models\BookingDetail;
use Illuminate\Database\Seeder;

class BookingDetailSeeder extends Seeder
{
    public function run()
    {
        BookingDetail::factory(10)->create();
    }
}

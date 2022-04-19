<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->name = 'Chưa có người đặt';
        $status->save();

        $status = new Status();
        $status->name = 'Đang đặt';
        $status->save();

        $status = new Status();
        $status->name = 'Đã có người đặt';
        $status->save();

        $status = new Status();
        $status->name = 'Chưa đặt';
        $status->save();
    }
}

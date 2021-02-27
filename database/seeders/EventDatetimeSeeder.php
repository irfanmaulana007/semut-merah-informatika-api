<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EventDateTimes;

class EventDatetimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventDateTimes::Create([
            'event_id' => 1,
            'date' => '2021-03-15',
            'start_time' => '13:00',
            'end_time' => '17:00'
        ]);

        EventDateTimes::Create([
            'event_id' => 1,
            'date' => '2021-03-16',
            'start_time' => '13:00',
            'end_time' => '15:00'
        ]);
    }
}

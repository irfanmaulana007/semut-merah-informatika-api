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
            'date' => '2021-03-30',
            'start_time' => '10:00',
            'end_time' => '14:00'
        ]);

        EventDateTimes::Create([
            'event_id' => 1,
            'date' => '2021-03-31',
            'start_time' => '10:00',
            'end_time' => '14:00'
        ]);


        EventDateTimes::Create([
            'event_id' => 2,
            'date' => '2021-01-13',
            'start_time' => '13:30',
            'end_time' => '16:30'
        ]);


        EventDateTimes::Create([
            'event_id' => 2,
            'date' => '2021-01-14',
            'start_time' => '13:30',
            'end_time' => '16:30'
        ]);


        EventDateTimes::Create([
            'event_id' => 3,
            'date' => '2021-06-07',
            'start_time' => '13:30',
            'end_time' => '16:30'
        ]);
    }
}

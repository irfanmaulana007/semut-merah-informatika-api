<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EventFees;

class EventFeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventFees::Create([
            'event_id' => 1,
            'fee_type_id' => 1,
            'amount' => 500000,
            'end_date' => '2021-03-26'
        ]);

        EventFees::Create([
            'event_id' => 1,
            'fee_type_id' => 2,
            'amount' => 625000,
            'end_date' => null
        ]);

        EventFees::Create([
            'event_id' => 3,
            'fee_type_id' => 1,
            'amount' => 0,
            'end_date' => null
        ]);
    }
}

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
            'end_date' => '2021-03-1'
        ]);

        EventFees::Create([
            'event_id' => 1,
            'fee_type_id' => 2,
            'amount' => 650000,
            'end_date' => null
        ]);
    }
}

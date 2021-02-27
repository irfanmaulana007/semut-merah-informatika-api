<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EventPayments;

class EventPaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventPayments::Create([
            'payment_status_id' => 1,
            'registrant_code' => 'abc123',
            'amount' => 200000,
            'note' => '',
            'payment_date' => '2021-02-27'
        ]);
    }
}

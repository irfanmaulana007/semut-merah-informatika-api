<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EventContactPersons;

class EventContactPersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventContactPersons::Create([
            'event_id' => 1,
            'name' => 'Dania',
            'contact' => '085159091137'
        ]);
    }
}

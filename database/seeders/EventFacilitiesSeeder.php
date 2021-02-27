<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EventFacilities;

class EventFacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventFacilities::Create([
            'event_id' => 1,
            'description' => 'Modul Training'
        ]);

        EventFacilities::Create([
            'event_id' => 1,
            'description' => 'E-Certificate'
        ]);
    }
}

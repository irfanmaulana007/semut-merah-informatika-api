<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EventSpeakerActivities;

class EventSpeakerActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventSpeakerActivities::Create([
            'event_id' => 1,
            'speaker_id' => 1
        ]);
    }
}

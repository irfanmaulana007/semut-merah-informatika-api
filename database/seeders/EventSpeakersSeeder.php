<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EventSpeakers;

class EventSpeakersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventSpeakers::Create([
            'name' => 'agra',
            'email' => 'agra@gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/abarecasco/',
        ]);
        
        EventSpeakers::Create([
            'name' => 'dania',
            'email' => 'dania@gmail.com'
        ]);

        EventSpeakers::Create([
            'name' => 'zuhra',
            'email' => 'zuhra@gmail.com'
        ]);
    }
}

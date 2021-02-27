<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EventSpeakers;

class SpeakersSeeder extends Seeder
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
            'email' => 'agra@gmail.com'
        ]);
    }
}

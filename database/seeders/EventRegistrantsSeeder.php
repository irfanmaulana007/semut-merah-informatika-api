<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EventRegistrants;

class EventRegistrantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventRegistrants::Create([
            'event_id' => 1,
            'occupation_id' => 1,
            'name' => 'irfan maulana',
            'company' => 'semut merah informatika',
            'email' => 'irfanmaulana695@gmail.com',
            'phone' => '085158790074',
            'code' => 'abc123'
        ]);
    }
}

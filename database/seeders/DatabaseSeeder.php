<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UsersSeeder::class,
            OccupationsSeeder::class,
            EventSpeakersSeeder::class,
            EventsSeeder::class,
            EventContactPersonsSeeder::class,
            EventFacilitiesSeeder::class,
            EventRegistrantsSeeder::class,
            FeeTypesSeeder::class,
            EventFeesSeeder::class,
            PaymentStatusSeeder::class,
            EventPaymentsSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Occupations;

class OccupationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Occupations::Create(['name' => 'Software Engineer']);
        Occupations::Create(['name' => 'Database Engineer']);
        Occupations::Create(['name' => 'Data Scientist']);
    }
}

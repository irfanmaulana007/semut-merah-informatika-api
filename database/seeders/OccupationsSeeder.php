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
        Occupations::Create(['name' => 'Business Analyst']);
        Occupations::Create(['name' => 'Cloud Computing Engineer']);
        Occupations::Create(['name' => 'Data Scientist']);
        Occupations::Create(['name' => 'Database Administrator']);
        Occupations::Create(['name' => 'Database Engineer']);
        Occupations::Create(['name' => 'IT Infrastructure']);
        Occupations::Create(['name' => 'IT Security']);
        Occupations::Create(['name' => 'Product Owner']);
        Occupations::Create(['name' => 'Project Manager']);
        Occupations::Create(['name' => 'Quality Assurance']);
        Occupations::Create(['name' => 'Software Engineer']);
        Occupations::Create(['name' => 'System Analyst']);
        Occupations::Create(['name' => 'UI/UX Designer']);
        Occupations::Create(['name' => 'Web Engineer']);
        Occupations::Create(['name' => 'Other']);
    }
}

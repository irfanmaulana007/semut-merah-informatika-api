<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\FeeTypes;

class FeeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeeTypes::Create(['name' => 'early bird']);
        FeeTypes::Create(['name' => 'normal']);
    }
}

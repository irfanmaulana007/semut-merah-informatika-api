<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\PaymentStatus;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentStatus::Create(['name' => 'pending']);
        PaymentStatus::Create(['name' => 'paid']);
    }
}

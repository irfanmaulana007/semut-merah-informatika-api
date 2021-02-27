<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::Create([
            'name' => 'asdf',
            'email' => 'asdf@gmail.com',
            'password' => Hash::make('asdf')
        ]);
    }
}

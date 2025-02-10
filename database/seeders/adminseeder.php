<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create(
            [
                'email' => 'admin@gmail.com',
                'password' => '12345',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'admin1@gmail.com',
                'password' => '12345',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\broker;
use Faker\Factory as Faker;

class BrokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Create 10 fake business records
        foreach (range(1, 100) as $index) {
            broker::create([
                'bc_name' => $faker->company,               // Business name
                'bc_number' => $faker->numerify('#######'),  // Business number (fake number)
                'b_city' => $faker->city,                    // City
                'b_name' => $faker->firstName,               // First name of the business contact
                'b_pass' => $faker->regexify('[A-Za-z0-9]{8,12}'), // Random password using regex
                'b_sname' => $faker->lastName,               // Last name of the business contact
                'b_email' => $faker->unique()->safeEmail,    // Email address
                'b_phoneno' => $faker->phoneNumber,          // Phone number
                'is_member_of_fmi' => $faker->randomElement(['yes', 'no']), // FMI membership status
                'b_working_area' => $faker->word,            // Working area (business type or field)
                'b_customer_area' => $faker->word,           // Customer area (business region or market)
                'is_approved' => $faker->randomElement(['0', '1']),  // Approval status (either '0' or '1')
                'created_at' => now(),                       // Created timestamp
                'updated_at' => now(),                       // Updated timestamp
            ]);
        }
    }

}

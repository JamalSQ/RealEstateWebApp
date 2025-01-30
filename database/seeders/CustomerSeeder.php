<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Create 10 fake customers
        foreach (range(1, 100) as $index) {
            Customer::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'adress' => $faker->address,
                'email' => $faker->unique()->safeEmail,
                'pass' => $faker->regexify('[A-Za-z0-9]{8,12}'), // Random password using regex
                'phoneno' => $faker->phoneNumber,
                'currentliving' => $faker->address,
                'confirmCL' => $faker->address,
                'Adults' => $faker->numberBetween(1, 5),
                'total_child' => $faker->numberBetween(0, 5),
                'city_where_buy_house' => $faker->city,
                'area_of_house' => $faker->word,
                'is_garage' => $faker->randomElement(['0', '1']),  // Randomly 0 or 1 for the garage
                'is_seaview' => $faker->randomElement(['0', '1']),  // Randomly 0 or 1 for the sea view
                'budget' => $faker->numberBetween(100000, 1000000),
                'is_renovated' => $faker->randomElement(['0','1']), // Randomly 0 or 1 for renovation status
                'new_house_move_time' => $faker->date(), // Random date for moving time
                'want_help_from_broker' => $faker->randomElement(['yes', 'no']), // Random yes/no
                'more_info' => $faker->text(200), // Random text for more information
                'created_at' => now(),  // Current timestamp for created_at
                'updated_at' => now(),  // Current timestamp for updated_at
            ]);
        }
    }

}

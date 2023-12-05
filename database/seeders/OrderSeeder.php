<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Generator as Faker;

class OrdersTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            Order::create([
                'user_id' => $faker->numberBetween(1, 10), // Assuming you have 10 users
                'address_id' => $faker->numberBetween(1, 10), // Assuming you have 10 addresses
                'order_date' => $faker->dateTime,
                'total_amount' => $faker->randomFloat(2, 10, 500),
                'is_completed' => $faker->boolean,
                'payment_method' => $faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
            ]);
        }
    }
}

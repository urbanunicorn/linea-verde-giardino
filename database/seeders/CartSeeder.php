<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Cart;
use Faker\Generator as Faker;

class CartSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            Cart::create([
                'user_id' => $faker->numberBetween(1, 10),
                'is_completed' => $faker->boolean,
            ]);
        }
    }
}

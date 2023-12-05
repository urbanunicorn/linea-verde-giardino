<?php

use Illuminate\Database\Seeder;
use App\Models\CartProduct;
use Faker\Generator as Faker;

class CartProductsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            CartProduct::create([
                'cart_id' => $faker->numberBetween(1, 10),
                'product_id' => $faker->numberBetween(1, 10),
                'quantity' => $faker->numberBetween(1, 5),
                'subtotal' => $faker->randomFloat(2, 10, 100),
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'subcategory_id' => $faker->numberBetween(1, 10),
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 5, 100),
                'brand' => $faker->company,
                'dimension' => $faker->randomNumber(2) . 'x' . $faker->randomNumber(2) . 'x' . $faker->randomNumber(2),
                'weight' => $faker->randomFloat(2, 1, 50),
                'is_on_sale' => $faker->boolean,
                'discount' => $faker->randomFloat(2, 0, 30),
                'sale_start_date' => $faker->date,
                'sale_end_date' => $faker->date,
                'is_visible' => $faker->boolean,
            ]);
        }
    }
}

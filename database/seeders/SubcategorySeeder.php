<?php

use Illuminate\Database\Seeder;
use App\Models\Subcategory;
use Faker\Generator as Faker;

class SubcategoriesTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            Subcategory::create([
                'category_id' => $faker->numberBetween(1, 5), // Assuming you have 5 categories
                'name' => $faker->word,
            ]);
        }
    }
}

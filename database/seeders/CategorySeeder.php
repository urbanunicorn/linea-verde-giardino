<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            Category::create([
                'name' => $faker->word,
            ]);
        }
    }
}


<?php

use Illuminate\Database\Seeder;
use App\Models\Image;
use Faker\Generator as Faker;

class ImagesTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            Image::create([
                'product_id' => $faker->numberBetween(1, 10), // Assuming you have 10 products
                'image_path' => $faker->imageUrl(),
            ]);
        }
    }
}


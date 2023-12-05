<?php

use Illuminate\Database\Seeder;
use App\Models\Statistic;
use Faker\Generator as Faker;

class StatisticsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            Statistic::create([
                'product_id' => $faker->numberBetween(1, 10),
                'visit_count' => $faker->randomNumber(),
            ]);
        }
    }
}

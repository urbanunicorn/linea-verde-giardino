<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            ProductSeeder::class,
            ImageSeeder::class,
            StatisticSeeder::class,
            AddressSeeder::class,
            OrderSeeder::class,
            CartSeeder::class,
            CartProductSeeder::class,
        ]);
    }
}

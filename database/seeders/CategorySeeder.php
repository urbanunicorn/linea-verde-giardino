<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Interni',
            'Illuminazione',
            'Esterni',
            'A tavola',
            'Bagno',
            'Accessori',
            'Elettronica',
            'Fai da Te',
            'Festivi',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}

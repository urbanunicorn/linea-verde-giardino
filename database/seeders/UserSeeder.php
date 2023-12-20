<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        // Genera manualmente i primi 5 utenti
        User::insert([
            [
                'name' => 'Matteo',
                'surname' => 'Di Lorenzo',
                'email' => 'matteo.dilorenzo@lineaverde.it',
                'password' => Hash::make('admin'),
                'is_admin' => true,
            ],
            [
                'name' => 'Guglielmo',
                'surname' => 'Piasenti',
                'email' => 'guglielmo.piasenti@lineaverde.it',
                'password' => Hash::make('admin'),
                'is_admin' => true,
            ],
            [
                'name' => 'Daniel',
                'surname' => 'Megale',
                'email' => 'daniel.megale@lineaverde.it',
                'password' => Hash::make('admin'),
                'is_admin' => true,
            ],
            [
                'name' => 'Pasquale',
                'surname' => 'Di Matteo',
                'email' => 'pasquale.dimatteo@lineaverde.it',
                'password' => Hash::make('admin'),
                'is_admin' => true,
            ],
            [
                'name' => 'Mario',
                'surname' => 'Rossi',
                'email' => 'mario.rossi@lineaverde.it',
                'password' => Hash::make('user'),
                'is_admin' => false,
            ],
        ]);

        // Genera altri 5 utenti tramite faker
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->name,
                'surname' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'is_admin' => false,
            ]);
        }
    }
}

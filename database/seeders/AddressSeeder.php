<?php

use Illuminate\Database\Seeder;
use App\Models\Address;
use Faker\Generator as Faker;

class AddressesTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            Address::create([
                'user_id' => $faker->numberBetween(1, 10),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'company_name' => $faker->company,
                'vat_number' => $faker->randomNumber(9),
                'street_address' => $faker->streetAddress,
                'zipcode' => $faker->postcode,
                'city' => $faker->city,
                'state' => $faker->state,
                'country' => $faker->country,
                'phone' => $faker->phoneNumber,
                'is_billing' => $faker->boolean,
                'is_shipping' => $faker->boolean,
            ]);
        }
    }
}

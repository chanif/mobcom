<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Locations;

class LocationsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,30) as $index){
            Locations::create([
                'author_id' => 1,
                'name' => $faker->catchPhrase(),
                'location' => $faker->address(),
                'nearest_mrt' => $faker->streetAddress(),
                'phone' => $faker->phoneNumber(),
                'website' => $faker->domainName(),
                'active' => $faker->boolean(),
                'last_order' => '10pm'
            ]);
        }
    }
}

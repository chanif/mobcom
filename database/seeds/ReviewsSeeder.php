<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Reviews;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,60) as $index){
            Reviews::create([
                'on_locations' => ($index>30)?$index-30:$index,
                'from_user' => ($index>30)?2:1,
                'body' => '<p>'.$faker->paragraph(8).'<p>'.$faker->paragraph(6).'<p>'.$faker->paragraph(7)
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comments;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,90) as $index){
            Comments::create([
                'on_news' => $faker->numberBetween(1,30),
                'from_user' => $faker->numberBetween(1,2),
                'body' => $faker->paragraph(9)
            ]);
        }
    }
}
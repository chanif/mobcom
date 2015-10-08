<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,30) as $index){
            News::create([
                'author_id' => 1,
                'body' => '<p>'.$faker->paragraph(13).'<p>'.$faker->paragraph(10).'<p>'.$faker->paragraph(12).'<p>'.$faker->paragraph(16),
                'active' => $faker->boolean()
            ]);
        }
    }
}

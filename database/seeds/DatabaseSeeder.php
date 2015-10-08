<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(NewsSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(LocationsSeeder::class);
        $this->call(ReviewsSeeder::class);

        Model::reguard();
    }
}

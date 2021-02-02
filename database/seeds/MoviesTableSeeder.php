<?php

use Illuminate\Database\Seeder;
use \Database\MovieFactory;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(MoviesTableSeeder::class, 10);
        factory(App\Movie::class, 10)->create();
    }
}

// ->each(function ($movie) {
//     $movie->posts()->save(factory(App\Post::class)->make());
// })
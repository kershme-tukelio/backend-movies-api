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
        factory(App\Movie::class, 10)->create();
    }
}
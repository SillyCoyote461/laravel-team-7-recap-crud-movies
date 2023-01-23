<?php

use Illuminate\Database\Seeder;

use App\Models\Movie;

use Faker\Generator as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newMovie = new Movie();
            $newMovie->title = $faker->name();
            $newMovie->genre = $faker->name();
            $newMovie->vote = $faker->randomDigit();
            $newMovie->save();
        }
    }
}

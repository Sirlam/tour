<?php

use Faker\Factory as faker;
use Illuminate\Database\Seeder;
use App\User;
use App\Place;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Implement run() method.

        DB::table('places')->truncate();
        $faker = Faker::create();
        $users = User::all()->pluck('id')->toArray();

        foreach(range(1, 50) as $index)
        {
            Place::create([
                'title' => $faker->word,
                'address' => $faker->text,
                'location' => $faker->word,
                'user_id' => $faker->randomElement($users),
                'description' => $faker->text,
                'image_1' => $faker->imageUrl($width = 550, $height = 550),
                'image_2' => $faker->imageUrl($width = 550, $height = 550),
                'image_3' => $faker->imageUrl($width = 550, $height = 550),
                'image_4' => $faker->imageUrl($width = 550, $height = 550),
                'image_5' => $faker->imageUrl($width = 550, $height = 550),
                'likes' => $faker->unique()->numberBetween($min=0, $max=200)
            ]);
        }
    }
}

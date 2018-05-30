<?php

use Faker\Factory as faker;
use Illuminate\Database\Seeder;
use App\User;
use App\Place;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Implement run() method.

        DB::table('comments')->truncate();
        $faker = Faker::create();
        $users = User::all()->pluck('id')->toArray();
        $places = Place::all()->pluck('id')->toArray();

        foreach(range(1, 50) as $index)
        {
            Comment::create([
                'user_id' => $faker->randomElement($users),
                'place_id' => $faker->randomElement($places),
                'comment' => $faker->text
            ]);
        }
    }
}

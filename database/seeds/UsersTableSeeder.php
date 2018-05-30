<?php


use Faker\Factory as faker;
use \Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // TODO: Implement run() method.
        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'username' => $faker->userName,
                'password' => $faker->password,
                'location' => $faker->text,
                'profile_picture' => $faker->imageUrl($width = 550, $height = 550)
            ]);
        }
    }
}
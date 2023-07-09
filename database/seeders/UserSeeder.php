<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $user = new User();
        $user->name = $faker->firstName() . " " . $faker->lastName;
        $user->email = strtolower(join("", explode(" ", $user->name))) . "@gmail.com";
        $user->password = Hash::make("123");
        $user->role = "owner";
        $user->save();

        $user = new User();
        $user->name = $faker->firstName() . " " . $faker->lastName;
        $user->email = strtolower(join("", explode(" ", $user->name))) . "@gmail.com";
        $user->password = Hash::make("123");
        $user->role = "employee";
        $user->save();

        for ($i = 0; $i < 3; $i++) {
            $user = new User();
            $user->name = $faker->firstName() . " " . $faker->lastName;
            $user->email = strtolower(join("", explode(" ", $user->name))) . "@gmail.com";
            $user->password = Hash::make("123");
            $user->membership = "non-active";
            $user->poin = 0;
            $user->role = "customer";
            $user->save();
        }
    }
}

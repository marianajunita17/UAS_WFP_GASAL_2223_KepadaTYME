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
        $u = new User();
        $u->name = $faker->firstName() . " " . $faker->lastName;
        $u->email = strtolower(join("", explode(" ", $u->name))) . "@gmail.com";
        $u->password = Hash::make("123");
        $u->role = "owner";
        $u->member_id = null;
        $u->save();

        $u = new User();
        $u->name = $faker->firstName() . " " . $faker->lastName;
        $u->email = strtolower(join("", explode(" ", $u->name))) . "@gmail.com";
        $u->password = Hash::make("123");
        $u->role = "staff";
        $u->member_id = null;
        $u->save();

        for ($i = 0; $i < 3; $i++) {
            $u = new User();
            $u->name = $faker->firstName() . " " . $faker->lastName;
            $u->email = strtolower(join("", explode(" ", $u->name))) . "@gmail.com";
            $u->password = Hash::make("123");
            $u->role = "customer";
            $u->member_id = null;
            $u->save();
        }
    }
}

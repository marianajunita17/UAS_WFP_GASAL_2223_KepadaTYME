<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();
        $u = new Pengguna();
        $u->name = $faker->firstName() . " " . $faker->lastName;
        $u->email = strtolower(join("", explode(" ", $u->name))) . "@gmail.com";
        $u->password = Hash::make("123");
        $u->member_id = null;
        $u->role = "owner";
        $u->save();

        $u = new Pengguna();
        $u->name = $faker->firstName() . " " . $faker->lastName;
        $u->email = strtolower(join("", explode(" ", $u->name))) . "@gmail.com";
        $u->password = Hash::make("123");
        $u->member_id = null;
        $u->role = "staff";
        $u->save();

        for ($i = 0; $i < 3; $i++) {
            $u = new Pengguna();
            $u->name = $faker->firstName() . " " . $faker->lastName;
            $u->email = strtolower(join("", explode(" ", $u->name))) . "@gmail.com";
            $u->password = Hash::make("123");
            $u->member_id = null;
            $u->role = "customer";
            $u->save();
        }
    }
}

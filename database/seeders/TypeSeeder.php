<?php

namespace Database\Seeders;

use App\Models\Type;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Clothes'
        ]);

        DB::table('types')->insert([
            'name' => 'Make Up'
        ]);

        DB::table('types')->insert([
            'name' => 'Skin Care'
        ]);
    }
}

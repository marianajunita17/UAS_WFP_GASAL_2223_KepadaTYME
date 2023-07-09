<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Blouse'
        ]);

        DB::table('categories')->insert([
            'name' => 'Lipstick'
        ]);

        DB::table('categories')->insert([
            'name' => 'Eye Shadow'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jeans'
        ]);

        DB::table('categories')->insert([
            'name' => 'T-Shirt'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hoodie'
        ]);

        DB::table('categories')->insert([
            'name' => 'Eye Liner'
        ]);

        DB::table('categories')->insert([
            'name' => 'Skirt'
        ]);

        DB::table('categories')->insert([
            'name' => 'Toner'
        ]);

        DB::table('categories')->insert([
            'name' => 'Serum'
        ]);

        DB::table('categories')->insert([
            'name' => 'Facial Wash'
        ]);
    }
}

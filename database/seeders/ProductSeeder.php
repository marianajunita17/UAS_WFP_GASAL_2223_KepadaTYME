<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $types = Type::get();
        $brands = Brand::get();
        for ($i=0; $i < 20; $i++) {
            $p = new Product();
            $p->name = $faker->word();
            $p->price = $faker->numberBetween(10, 20000) * 100;
            $p->filename = "https://picsum.photos/id/".$faker->numberBetween(1,1060)."/300/300";
            $p->types_id = $faker->randomElement($types)->id;
            $p->brands_id = $faker->randomElement($brands)->id;
            $p->save();
        }
    }
}

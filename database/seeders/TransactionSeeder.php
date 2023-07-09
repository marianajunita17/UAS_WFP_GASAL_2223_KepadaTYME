<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $users = User::where("role", "customer")->get();
        $products = Product::get();
        for ($i=0; $i < 20; $i++) {
            $t = new Transaction();
            $t->user_id = $faker->randomElement($users)->id;
            $t->transaction_date = $faker->dateTimeThisDecade();
            $ps = $faker->randomElements($products,$faker->numberBetween(5,10));
            $total = 0;
            $t->total = 0;
            $t->save();
            foreach($ps as $p){
                $qty = $faker->numberBetween(1,20);
                $subtotal = $qty * $p->price;
                $t->products()->attach($p->id, [
                    "quantity" => $qty,
                    "subtotal" => $subtotal
                ]);
                $total += $subtotal;
            }
            $t->total = $total;
            $t->save();
        }
    }
}

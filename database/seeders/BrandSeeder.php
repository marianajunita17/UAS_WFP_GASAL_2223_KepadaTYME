<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Chanel',
            'logourl'=>'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/chanel-logo-design-template-6f6e604425c5632a1c2497553f5216fa_screen.jpg?ts=1651808341'
        ]);

        DB::table('brands')->insert([
            'name' => 'Louis Vuitton',
            'logourl'=>'https://iconlogovector.com/uploads/images/2023/03/lg-9387c739166693138a7edc0c0233226d87.jpg'
        ]);

        DB::table('brands')->insert([
            'name' => 'Maybelline',
            'logourl'=>'https://pbs.twimg.com/profile_images/828838783772553216/feEZQHaz_400x400.jpg'
        ]);

        DB::table('brands')->insert([
            'name' => 'Dear Me Beauty',
            'logourl'=>'https://id-test-11.slatic.net/shop/923c566775ee8015175d1ff4041fb1fd.png'
        ]);

        DB::table('brands')->insert([
            'name' => 'Sephora',
            'logourl'=>'https://seeklogo.com/images/S/sephora-logo-F5C4DB9E97-seeklogo.com.png'
        ]);

        DB::table('brands')->insert([
            'name' => 'Hush Puppies',
            'logourl'=>'https://upload.wikimedia.org/wikipedia/en/a/a1/Hush_Puppies_logo.png'
        ]);


    }
}

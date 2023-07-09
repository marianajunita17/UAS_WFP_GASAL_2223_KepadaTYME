<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Type;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Haute Couture Fall-Winter',
            'price' => '11200000',
            'dimensi' => 'S, M, L, XL, XXL',
            'photourl' => 'https://www.chanel.com/images/q_auto,f_auto,fl_lossy,dpr_auto/w_786/FSH-1688546679050-fall-winter-2023-24-haute-couture-018.jpg',
            'type_id' => 1,
            'brand_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Volee In Purple',
            'price' => '499000',
            'dimensi' => 'S, M, L, XL, XXL',
            'photourl' => 'https://www.hushpuppies.co.id/media/catalog/product/cache/2bc9c420d3f2e3c7568d8647caa237a5/L/H/LH24389PP-Purple-1.jpg',
            'type_id' => 1,
            'brand_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => 'Anastasia Beverly Hills',
            'price' => '1012000',
            'dimensi' => '12 Pallete, 8 Pallete, 5 Pallete',
            'photourl' => 'https://image-optimizer-id.production.sephora-asia.net/images/product_images/default_2_Product_689304191753-Anastasia-Beverly-Hills-Cosmos-Eye-Shadow-Palette-Default_ee84578e60159a875778c97783305d8d1ec61ab3_1684725062.png',
            'type_id' => 2,
            'brand_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Ombre Kit Velvet Liptint',
            'price' => '158000',
            'dimensi' => 'Dark Brown, Peach, Soft Pink',
            'photourl' => 'https://images.soco.id/96d0465b-534d-4710-b01c-7faddd26ecda-.jpg',
            'type_id' => 2,
            'brand_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Packet Organizer',
            'price' => '9450000',
            'dimensi' => 'White, Blue, Black, Red, Navy',
            'photourl' => 'https://id.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-pocket-organizer-taurillon-monogram-dompet-dan-produk-kulit-berukuran-kecil--M82557_PM2_Front%20view.png?wid=1090&hei=1090',
            'type_id' => 4,
            'brand_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Haute Couture Fall-Winter',
            'price' => '194590000',
            'dimensi' => 'S, M, L, XL, XXL',
            'photourl' => 'https://www.chanel.com/images/q_auto,f_auto,fl_lossy,dpr_auto/w_786/FSH-1688546679050-fall-winter-2023-24-haute-couture-018.jpg',
            'type_id' => 1,
            'brand_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Sky Hight Waterproof Maskara',
            'price' => '149000',
            'dimensi' => 'Black, Blue, Brown',
            'photourl' => 'https://www.maybelline.co.id/-/media/project/loreal/brand-sites/mny/apac/id/products/eye-makeup/mascara/maybelline-lash-sensational-sky-high-wtp-802-very-black-o.jpg?rev=d7af0cd262c242b78a1122e4b4cf8ef4&cx=0.45&cy=0.47&cw=316&ch=475&hash=9AA99ADB99A1859F39D624295FA8F63E',
            'type_id' => 2,
            'brand_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Bucks In Navy',
            'price' => '399000',
            'dimensi' => 'Navi, Khaki, Black, Olive',
            'photourl' => 'https://www.hushpuppies.co.id/media/catalog/product/cache/c1e792f8b86561bd65194f05e9ff9cd0/C/P/CP23006NV-Navy-1.jpg',
            'type_id' => 4,
            'brand_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => 'LV X YK Pumpkins Printed T-Shirt',
            'price' => '13100000',
            'dimensi' => 'S, M, L, XL, XXL',
            'photourl' => 'https://id.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-lv-x-yk-pumpkins-printed-t-shirt-ready-to-wear--HOY25WNPG002_PM1_Cropped%20view.png?wid=1090&hei=1090',
            'type_id' => 1,
            'brand_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Twist PM',
            'price' => '74500000',
            'dimensi' => 'Soft Pink, White',
            'photourl' => 'https://id.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-twist-pm-epi-handbags--M23074_PM1_Side%20view.png?wid=1090&hei=1090',
            'type_id' => 4,
            'brand_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Glow Serum',
            'price' => '375000',
            'dimensi' => '30ml, 60ml, 120ml',
            'photourl' => 'https://image-optimizer-id.production.sephora-asia.net/images/product_images/closeup_ID_S_SuperGlowSerum_PDP_52174cf1cc5f1e078a836e3c52afcfbae11cd294_1685003333.png',
            'type_id' => 3,
            'brand_id' => 5
        ]);

    }
}

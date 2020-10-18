<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Oppo Mobile',
                'price' => '300',
                'description' => 'A smartphone with 8gb ram and much more features',
                'category' => 'mobile',
                'gallery' => "https://www.91-img.com/pictures/128810-v2-oppo-r17-mobile-phone-large-1.jpg"
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '400',
                'description' => 'Smart TV with much more features',
                'category' => 'tv',
                'gallery' => "https://www.110220volts.com/media/extendware/ewimageopt/media/inline/c5/5/panasonic-th-p50s10s-50-multisystem-plasma-tv-110-220volts-fa4.jpg"
            ],
            [
                'name' => 'Sony TV',
                'price' => '500',
                'description' => 'TV with much more features',
                'category' => 'tv',
                'gallery' => "https://sahuagencies.com/wp-content/uploads/2017/11/SONY-LED-TV-KLV-32W672E3.jpg"
            ],
            [
                'name' => 'LG Fridge',
                'price' => '600',
                'description' => 'A fridge with much more features',
                'category' => 'fridge',
                'gallery' => "http://www.lg.com/us/images/refrigerators/md05110243/gallery/medium01.jpg"
            ]
        ]);
    }
}
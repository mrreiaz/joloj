<?php

use Illuminate\Database\Seeder;

class ProductsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [ 'id'=>'1' , 'name'  => 'Fish' ,'short_title' => 'title1', 'long_title' => 'This is title', 'short_description' => 'We provide huge number of different layouts.' , 'long_description' => 'We provide huge number of different layouts.We provide huge number of different layouts.We provide huge number of different layouts.', 'brand_photo' => 'brand/brand-02.png' , 'product_photo' => 'product/product-1.jpg', 'is_fratured' => 1 , 'real_price' => '200' , 'discunt_price' => '120' , 'discunt_price_by_parsents' => '10', 'mega_sell_price' => '10' , 'instagram_links' => 'https://www.instagram.com/p/BPqMQiCFT9Y/?taken-by=jolojaquaticbd&hl=en' , 'facebook_links' => 'https://www.facebook.com/JolojAquaticBD/?ref=aymt_homepage_panel' , 'youtube_links' => 'https://www.youtube.com/watch?v=QhJvhwIDcqE'],
        ]);
    }
}

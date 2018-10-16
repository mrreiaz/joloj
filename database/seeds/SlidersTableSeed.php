<?php

use Illuminate\Database\Seeder;

class SlidersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('slides')->insert([
            [ 'id'  => 1,   'title1'  => 'Bala Shark',           'bigtitle'  => 'Male Halfmoon Betta',          'title2'=>'90 % off !',  'slider_img' => 'front/images/slides/1.jpg'],
            [ 'id'  => 2,   'title1'  => 'Paradise Betta',       'bigtitle'  => 'DuckWeed',                     'title2'=>'10% OFF !!',  'slider_img' => 'front/images/slides/2.jpg'],
            [ 'id'  => 3,   'title1'  => 'Albino Tiger Barb',    'bigtitle'  => 'Bacopa Caroliniana',           'title2'=>'100% OFF !!', 'slider_img' => 'front/images/slides/3.jpg'],
        ]);
    }
}

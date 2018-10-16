<?php

use Illuminate\Database\Seeder;

class TestimonialTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [ 'id'=>'1' , 'name'  => 'Fish' ,'name_title' => 'take_OK', 'source' => 'koko', 'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.' , 'img' => 'front/images/custom/slider-blog-img01.jpg' ],
            [ 'id'=>'2' , 'name'  => 'Fish' ,'name_title' => 'take_OK', 'source' => 'koko', 'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.' , 'img' => 'front/images/custom/slider-blog-img02.jpg' ],
            [ 'id'=>'3' , 'name'  => 'Fish' ,'name_title' => 'take_OK', 'source' => 'koko', 'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.' , 'img' => 'front/images/custom/slider-blog-img01.jpg' ],
            [ 'id'=>'4' , 'name'  => 'Fish' ,'name_title' => 'take_OK', 'source' => 'koko', 'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.' , 'img' => 'front/images/custom/slider-blog-img02.jpg' ],
        ]);
    }
}

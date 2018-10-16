<?php

use Illuminate\Database\Seeder;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('footers')->insert([
            [ 'id'  => 1,   'footer_text'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. ',       'facebook'  => 'link', 'twitter'  => 'link', 'google_plus'  => 'link',  'instagram'  => 'link', 'youtube'=>'link'],
        ]);
    }
}

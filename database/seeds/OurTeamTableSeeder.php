<?php

use Illuminate\Database\Seeder;

class OurTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('our_teams')->insert([
            [ 'id'  => 1, 'img' => '/front/images/custom/team-img-01.jpg', 'name' => 'Al-amin','designations' => 'CTO', 'body'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. '],
        ]);
    }
}

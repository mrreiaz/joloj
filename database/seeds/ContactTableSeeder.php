<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contucts')->insert([
            [ 'id'  => 1,   'address'  => 'dev',   'phone'  => 'dev@gmail.com',  'hours'=>'ok', 'email' => '1', 'facebook' => '#', 'twitter' => '#', 'google' => '#', 'instagram' => '#' ,'youtube' => '#'],
        ]);
        
    }
}

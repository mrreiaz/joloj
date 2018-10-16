<?php

use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'id'                => 1,
                'first_name'        => 'Md Abdul Halim',
                'last_name'         => 'Reiaz',
                'username'          => 'reiaz',
                'company'           => 'whit',
                'user_photo'        => 'admin/img/admin.jpg',
                'email'             => 'reiazbubt@gmail.com',
                'password'          => bcrypt('123456'),
                'con_password'      => bcrypt('123456'),
                'number'            => '01831004996',
                'address'           => 'Dhaka',
                'city'              => 'Dhaka',
                'postal_code'       => 12323,
            ],
        ]);
        
    }
}

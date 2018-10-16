<?php

use Illuminate\Database\Seeder;

class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            [ 'id'  => 1,   'slug'  => 'dev',        'name'  => 'dev',       'permissions'=>'ok'],
            [ 'id'  => 2,   'slug'  => 'admin',      'name'  => 'admin',     'permissions'=>'ok'],
            [ 'id'  => 3,   'slug'  => 'manager',    'name'  => 'manager',   'permissions'=>'ok'],
        ]);
    }
}

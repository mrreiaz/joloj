<?php

use Illuminate\Database\Seeder;

class PersistencesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persistences')->insert([
            [ 'id'  => 1,    'user_id'  => 1,  'code'=>'2jYp0mzn1RjjGLCtA5W1TexLvF9Rc0dA'],
            [ 'id'  => 2,    'user_id'  => 2,  'code'=>'qNKAhTygnSEbYZuFssdXHfAcRbpAo9l71'],
            [ 'id'  => 3,    'user_id'  => 3,  'code'=>'2jYp0mzn1RjjGLCtAdd5W1TexLvF9Rc0dA'],
            [ 'id'  => 4,    'user_id'  => 1,  'code'=>'qNKAhTygnSEbYZuFIdddsXHfAcRbpAo9l71'],
        ]);
    }
}

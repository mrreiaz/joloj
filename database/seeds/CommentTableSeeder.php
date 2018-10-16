<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('comments')->insert([
            [ 'id'  => 1,   'name'  => 'dev',   'email'  => 'dev@gmail.com',  'comment'=>'ok',  'blog_id' =>1, 'comment_id' =>1 ],
        ]);
        
    }
}

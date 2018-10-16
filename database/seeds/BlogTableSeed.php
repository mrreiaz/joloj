<?php

use Illuminate\Database\Seeder;

class BlogTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [ 'id'=>'1' , 'blog_img'  => 'blog/img/post-img-04.jpg' , 'title'  => 'Title 1'    , 'body'  => 'The fastest way to get Summernote is to download the precompiled and minified versions of our CSS, JavaScript. No documentation or original source code files are included.' ],
            [ 'id'=>'2' , 'blog_img'  => 'blog/img/post-img-04.jpg' , 'title'  => 'Title 1'    , 'body'  => 'The fastest way to get Summernote is to download the precompiled and minified versions of our CSS, JavaScript. No documentation or original source code files are included.' ],
            [ 'id'=>'3' , 'blog_img'  => 'blog/img/post-img-04.jpg' , 'title'  => 'Title 1'    , 'body'  => 'The fastest way to get Summernote is to download the precompiled and minified versions of our CSS, JavaScript. No documentation or original source code files are included.' ],
            [ 'id'=>'4' , 'blog_img'  => 'blog/img/post-img-04.jpg' , 'title'  => 'Title 1'    , 'body'  => 'The fastest way to get Summernote is to download the precompiled and minified versions of our CSS, JavaScript. No documentation or original source code files are included.' ],
            [ 'id'=>'5' , 'blog_img'  => 'blog/img/post-img-04.jpg' , 'title'  => 'Title 1'    , 'body'  => 'The fastest way to get Summernote is to download the precompiled and minified versions of our CSS, JavaScript. No documentation or original source code files are included.' ],
            [ 'id'=>'6' , 'blog_img'  => 'blog/img/post-img-04.jpg' , 'title'  => 'Title 1'    , 'body'  => 'The fastest way to get Summernote is to download the precompiled and minified versions of our CSS, JavaScript. No documentation or original source code files are included.' ],
        ]);
    }
}

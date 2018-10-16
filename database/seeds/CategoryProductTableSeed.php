<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_product')->insert([
            [ 'id'=>'1' , 'category_id'  => 3, 'product_id' => 1 ],
            [ 'id'=>'2' , 'category_id'  => 4, 'product_id' => 1 ],
            [ 'id'=>'3' , 'category_id'  => 5, 'product_id' => 1 ],
            [ 'id'=>'4' , 'category_id'  => 6, 'product_id' => 1 ],
            [ 'id'=>'5' , 'category_id'  => 7, 'product_id' => 1 ],
            [ 'id'=>'6' , 'category_id'  => 4, 'product_id' => 1 ],
        ]);
    }
}

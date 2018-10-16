<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [ 'id'=>'1' , 'name'  => 'fish'             ],
            [ 'id'=>'2' , 'name'  => 'food'             ],
            [ 'id'=>'3' , 'name'  => 'accessories'      ],
            [ 'id'=>'4' , 'name'  => 'popular product'  ],
            [ 'id'=>'5' , 'name'  => 'fratured products'],
            [ 'id'=>'6' , 'name'  => 'today offer'      ],
            [ 'id'=>'7' , 'name'  => 'top sell'         ],
        ]);
    }
}

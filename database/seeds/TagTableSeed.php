<?php

use Illuminate\Database\Seeder;

class TagTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [ 'id'=>'1' , 'name'  => 'Fish'      ],
            [ 'id'=>'2' , 'name'  => 'Food'      ],
            [ 'id'=>'3' , 'name'  => 'Green'     ],
            [ 'id'=>'4' , 'name'  => 'Aquarium'  ],
            [ 'id'=>'5' , 'name'  => 'Tank'      ],
            [ 'id'=>'6' , 'name'  => 'Water Tank'],
        ]);
    }
}

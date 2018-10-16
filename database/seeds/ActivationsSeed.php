<?php

use Illuminate\Database\Seeder;

class ActivationsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activations')->insert([
            [ 'id'=>'1' , 'user_id'  => 1,    'code'  => 'C0yqq3V2iwpi9biTXAmt4j7t0oTXAmMI', 'completed'=>'1' ],
            [ 'id'=>'2' , 'user_id'  => 2,    'code'  => 'dtmHhwV995Aynerz72JNevNCTUh3UclB', 'completed'=>'1' ],
            [ 'id'=>'3' , 'user_id'  => 3,    'code'  => 'HNncZAEAcHnp7KPWjSq1dE3wJ8cxP6O0', 'completed'=>'1' ],
            [ 'id'=>'4' , 'user_id'  => 4,    'code'  => 'R1O41oFE5hPQvUGM3dsAhptPF7hlqI7S', 'completed'=>'1' ],
        ]);
    }
}

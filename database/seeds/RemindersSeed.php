<?php

use Illuminate\Database\Seeder;

class RemindersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('reminders')->insert([
            [ 'user_id'  => 1,    'code'  => '323233231323232', 'completed' => 1 ],
            [ 'user_id'  => 2,    'code'  => '2232ecdse33sdd4', 'completed' => 1 ],
            [ 'user_id'  => 3,    'code'  => '323esddsdsdsdsd', 'completed' => 1 ],
        ]);
    }
}

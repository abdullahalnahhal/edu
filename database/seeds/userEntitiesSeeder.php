<?php

use Illuminate\Database\Seeder;

class userEntitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users_entities')->insert([
         	[
                'id' => 1,
         		'entity' => 'Teacher',
         		'shortcut' => 'TCHR'
         	],
         	[
                'id' => 2,
         		'entity' => 'Student',
         		'shortcut' => 'STDNT'
         	]
        ]);
    }
}

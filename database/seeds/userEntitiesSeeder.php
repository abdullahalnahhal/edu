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
         		'entity' => 'Teacher',
         		'shortcut' => 'TCHR'
         	],
         	[
         		'entity' => 'Student',
         		'shortcut' => 'STDNT'
         	]
        ]);
    }
}

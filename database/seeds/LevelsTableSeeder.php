<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
         	[
         		'id' => 1,
         		'level' => 'Primary',
         	],
         	[
         		'id' => 2,
         		'level' => 'Prep',
         	],
         	[
         		'id' => 3,
         		'level' => 'Secondary',
         	],
        ]);
    }
}

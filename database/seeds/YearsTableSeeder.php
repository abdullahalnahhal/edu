<?php

use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->insert([
         	[
         		'id' => 1,
         		'year' => 'First Year',
         		'level_id' => 1,
         	],
         	[
         		'id' => 2,
         		'year' => 'Second Year',
         		'level_id' => 1,
         	],
         	[
         		'id' => 3,
         		'year' => 'Third Year',
         		'level_id' => 1,
         	],
         	[
         		'id' => 4,
         		'year' => 'Fourth Year',
         		'level_id' => 1,
         	],
         	[
         		'id' => 5,
         		'year' => 'Fifth Year',
         		'level_id' => 1,
         	],
         	[
         		'id' => 6,
         		'year' => 'Sixth Year',
         		'level_id' => 1,
         	],
         	[
         		'id' => 7,
         		'year' => 'First Year',
         		'level_id' => 2,
         	],
         	[
         		'id' => 8,
         		'year' => 'Second Year',
         		'level_id' => 2,
         	],
         	[
         		'id' => 9,
         		'year' => 'Third Year',
         		'level_id' => 2,
         	],
         	[
         		'id' => 10,
         		'year' => 'First Year',
         		'level_id' => 3,
         	],
         	[
         		'id' => 11,
         		'year' => 'Second Year',
         		'level_id' => 3,
         	],
         	[
         		'id' => 12,
         		'year' => 'Third Year',
         		'level_id' => 3,
         	],
        ]);
    }
}

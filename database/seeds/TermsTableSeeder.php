<?php

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms')->insert([
         	[
         		'id' => 1,
         		'term' => 'First',
         		'year_id' => 1,
         	],
         	[
         		'id' => 2,
         		'term' => 'Second',
         		'year_id' => 1,
         	],
         	[
         		'id' => 3,
         		'term' => 'First',
         		'year_id' => 2,
         	],
         	[
         		'id' => 4,
         		'term' => 'Second',
         		'year_id' => 2,
         	],
         	[
         		'id' => 5,
         		'term' => 'First',
         		'year_id' => 3,
         	],
         	[
         		'id' => 6,
         		'term' => 'Second',
         		'year_id' => 3,
         	],
         	[
         		'id' => 7,
         		'term' => 'First',
         		'year_id' => 4,
         	],
         	[
         		'id' => 8,
         		'term' => 'Second',
         		'year_id' => 4,
         	],
         	[
         		'id' => 9,
         		'term' => 'First',
         		'year_id' => 5,
         	],
         	[
         		'id' => 10,
         		'term' => 'Second',
         		'year_id' => 5,
         	],
         	[
         		'id' => 11,
         		'term' => 'First',
         		'year_id' => 6,
         	],
         	[
         		'id' => 12,
         		'term' => 'Second',
         		'year_id' => 6,
         	],
         	[
         		'id' => 13,
         		'term' => 'First',
         		'year_id' => 7,
         	],
         	[
         		'id' => 14,
         		'term' => 'Second',
         		'year_id' => 7,
         	],
         	[
         		'id' => 15,
         		'term' => 'First',
         		'year_id' => 8,
         	],
         	[
         		'id' => 16,
         		'term' => 'Second',
         		'year_id' => 8,
         	],
         	[
         		'id' => 17,
         		'term' => 'First',
         		'year_id' => 9,
         	],
         	[
         		'id' => 18,
         		'term' => 'Second',
         		'year_id' => 9,
         	],
         	[
         		'id' => 19,
         		'term' => 'First',
         		'year_id' => 10,
         	],
         	[
         		'id' => 20,
         		'term' => 'Second',
         		'year_id' => 10,
         	],
         	[
         		'id' => 21,
         		'term' => 'First',
         		'year_id' => 11,
         	],
         	[
         		'id' => 22,
         		'term' => 'Second',
         		'year_id' => 11,
         	],
         	[
         		'id' => 23,
         		'term' => 'First',
         		'year_id' => 12,
         	],
         	[
         		'id' => 24,
         		'term' => 'Second',
         		'year_id' => 12,
         	],

        ]);
    }
}

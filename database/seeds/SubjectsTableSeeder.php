<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
         	[
         		'id' => 1,
         		'subject' => 'subject.l1.y1.t1',
         		'level_id' => 1,
         		'year_id' => 1,
         		'term_id' => 1,
         	],
         	[
         		'id' => 2,
         		'subject' => 'subject.l1.y1.t2',
         		'level_id' => 1,
         		'year_id' => 1,
         		'term_id' => 2,
         	],
         	[
         		'id' => 3,
         		'subject' => 'subject.l1.y2.t1',
         		'level_id' => 1,
         		'year_id' => 2,
         		'term_id' => 3,
         	],
         	[
         		'id' => 4,
         		'subject' => 'subject.l1.y2.t2',
         		'level_id' => 1,
         		'year_id' => 2,
         		'term_id' => 4,
         	],
         	[
         		'id' => 5,
         		'subject' => 'subject.l1.y3.t1',
         		'level_id' => 1,
         		'year_id' => 3,
         		'term_id' => 5,
         	],
         	[
         		'id' => 6,
         		'subject' => 'subject.l1.y3.t2',
         		'level_id' => 1,
         		'year_id' => 3,
         		'term_id' => 6,
         	],
         	[
         		'id' => 7,
         		'subject' => 'subject.l1.y4.t1',
         		'level_id' => 1,
         		'year_id' => 4,
         		'term_id' => 7,
         	],
         	[
         		'id' => 8,
         		'subject' => 'subject.l1.y4.t2',
         		'level_id' => 1,
         		'year_id' => 4,
         		'term_id' => 8,
         	],
         	[
         		'id' => 9,
         		'subject' => 'subject.l1.y5.t1',
         		'level_id' => 1,
         		'year_id' => 5,
         		'term_id' => 9,
         	],
         	[
         		'id' => 10,
         		'subject' => 'subject.l1.y5.t2',
         		'level_id' => 1,
         		'year_id' => 5,
         		'term_id' => 10,
         	],
         	[
         		'id' => 11,
         		'subject' => 'subject.l1.y5.t1',
         		'level_id' => 1,
         		'year_id' => 6,
         		'term_id' => 11,
         	],
         	[
         		'id' => 12,
         		'subject' => 'subject.l1.y6.t2',
         		'level_id' => 1,
         		'year_id' => 6,
         		'term_id' => 12,
         	],
         	[
         		'id' => 13,
         		'subject' => 'subject.l2.y1.t1',
         		'level_id' => 2,
         		'year_id' => 7,
         		'term_id' => 13,
         	],
         	[
         		'id' => 14,
         		'subject' => 'subject.l2.y1.t2',
         		'level_id' => 2,
         		'year_id' => 7,
         		'term_id' => 14,
         	],
         	[
         		'id' => 15,
         		'subject' => 'subject.l2.y2.t1',
         		'level_id' => 2,
         		'year_id' => 8,
         		'term_id' => 15,
         	],
         	[
         		'id' => 16,
         		'subject' => 'subject.l2.y2.t2',
         		'level_id' => 2,
         		'year_id' => 8,
         		'term_id' => 16,
         	],
         	[
         		'id' => 17,
         		'subject' => 'subject.l2.y3.t1',
         		'level_id' => 2,
         		'year_id' => 9,
         		'term_id' => 17,
         	],
         	[
         		'id' => 18,
         		'subject' => 'subject.l2.y3.t2',
         		'level_id' => 2,
         		'year_id' => 9,
         		'term_id' => 18,
         	],
         	[
         		'id' => 19,
         		'subject' => 'subject.l3.y1.t1',
         		'level_id' => 3,
         		'year_id' => 10,
         		'term_id' => 19,
         	],
         	[
         		'id' => 20,
         		'subject' => 'subject.l3.y1.t2',
         		'level_id' => 3,
         		'year_id' => 10,
         		'term_id' => 20,
         	],
         	[
         		'id' => 21,
         		'subject' => 'subject.l3.y2.t1',
         		'level_id' => 3,
         		'year_id' => 11,
         		'term_id' => 21,
         	],
         	[
         		'id' => 22,
         		'subject' => 'subject.l3.y2.t2',
         		'level_id' => 3,
         		'year_id' => 11,
         		'term_id' => 22,
         	],
         	[
         		'id' => 23,
         		'subject' => 'subject.l3.y3.t1',
         		'level_id' => 3,
         		'year_id' => 12,
         		'term_id' => 23,
         	],
         	[
         		'id' => 24,
         		'subject' => 'subject.l3.y3.t2',
         		'level_id' => 3,
         		'year_id' => 12,
         		'term_id' => 24,
         	],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class QuestionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions_types')->insert([
         	[
         		'id' => 1,
         		'type' => 'True And False',
         		'shortcut'=> 'T&F',
         	],
         	[
                'id' => 2,
                'type' => 'Multiple Choices',
                'shortcut'=> 'MLCS',
            ],
            [
                'id' => 3,
                'type' => 'Textual',
                'shortcut'=> 'TXT',
            ],
        ]);
    }
}

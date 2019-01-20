<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
         	[
         		'name' => 'Teacher',
         		'phone' => '01116608822',
         		'user_id' => 1,
         	],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
         	[
         		'id' => 1,
         		'name' => 'Teacher',
         		'email' => 'teacher@test.com',
         		'password' => Hash::make('teacher'),
         		'entity_id' => 1,
         	],
        ]);
    }
}

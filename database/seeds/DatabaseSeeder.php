<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userEntitiesSeeder::class);
        $this->call(QuestionTypesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(YearsTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);

    }
}

<?php

use Illuminate\Database\Seeder;
use Database\Seeders;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(Answers_TypesSeeder::class);
        $this->call(FormsSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(Answers_optionsSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(TutorsSeeder::class);
        $this->call(PupilsSeeder::class);
    }
}

<?php

//namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TutorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tutors")->insert([ "id" => "1", "description" => "Tutor de pruebas", "user_id" => "2",]);
    }
}

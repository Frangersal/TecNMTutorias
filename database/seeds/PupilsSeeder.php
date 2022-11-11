<?php

//namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PupilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id	coment	user_id	tutor_id
        DB::table("pupils")->insert([ "id" => "1", "coment" => "Pupil de pruebas", "user_id" => "3", "tutor_id" => "1",]);
        DB::table("pupils")->insert([ "id" => "2", "coment" => "Pupil de pruebas Francisco", "user_id" => "4", "tutor_id" => "1",]);
        DB::table("pupils")->insert([ "id" => "3", "coment" => "Pupil de pruebas Gerardo", "user_id" => "5", "tutor_id" => "1",]);
        DB::table("pupils")->insert([ "id" => "4", "coment" => "Pupil de pruebas Paula", "user_id" => "6", "tutor_id" => "1",]);
        DB::table("pupils")->insert([ "id" => "5", "coment" => "Pupil de pruebas Alina", "user_id" => "7", "tutor_id" => "1",]);
    }
}

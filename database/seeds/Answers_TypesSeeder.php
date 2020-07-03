<?php

use Illuminate\Database\Seeder;
use App\AnswersTypes;

class Answers_TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('answers_types')->insert(['name' => 'texto','description' => 'Texto libre' ]);
        DB::table('answers_types')->insert(['name' => 'opcion','description' => 'Elegir entre varias opciones predeterminadas' ]);
    }
}

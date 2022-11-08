<?php

//namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Form;

class FormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("forms")->insert([
         "id" => "1",
         "name" => "Formato de entrevista",
         "description" => "Formulario sobre Formato de entrevista",
      ]);
      
      DB::table("forms")->insert([
         "id" => "2",
         "name" => "Nombre de los hermanos del mayor al menor, incluyendote tú ",
         "description" => "Formulario sobre el Nombre de los hermanos del mayor al menor, incluyendote tú ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "3",
         "name" => "Economia familiar ",
         "description" => "Formulario sobre la Economia familiar ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "4",
         "name" => "Realizacion de estudios ",
         "description" => "Formulario sobre Realizacion de estudios ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "5",
         "name" => "Desajustes psicofisiologicos ",
         "description" => "Formulario sobre Desajustes psicofisiologicos ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "6",
         "name" => "Áreas de Integracion padres ",
         "description" => "Formulario sobre las Áreas de Integracion padres ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "7",
         "name" => "Áreas de Integracion hermanos ",
         "description" => "Formulario sobre las Áreas de Integracion con hermanos ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "8",
         "name" => "Áreas de Integracion familiares ",
         "description" => "Formulario sobre Áreas de Integracion familiares ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "9",
         "name" => "Área social ",
         "description" => "Formulario sobre Área social ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "10",
         "name" => "Características personales (madurez y equilibrio) ",
         "description" => "Formulario sobre Características personales (madurez y equilibrio) ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "11",
         "name" => "Área psicopedagógica ",
         "description" => "Formulario sobre Área psicopedagógica ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "12",
         "name" => "Plan de vida y carrera ",
         "description" => "Formulario sobre Plan de vida y carrera ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "13",
         "name" => "Características personales de... ",
         "description" => "Formulario sobre Características personales de.. ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "14",
         "name" => "Encuesta para organización del estudio ",
         "description" => "Formulario sobre Encuesta para organización del estudio ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "15",
         "name" => "Encuesta sobre técnicas de estudio ",
         "description" => "Formulario sobre Encuesta sobre técnicas de estudio ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "16",
         "name" => "Encuesta sobre motivación para el estudio ",
         "description" => "Formulario sobre Encuesta sobre motivación para el estudio ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "17",
         "name" => "Test de autoestima ",
         "description" => "Formulario sobre Test de autoestima ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "18",
         "name" => "Test de asertividad ",
         "description" => "Formulario sobre Test de asertividad ",
      ]);
      
      DB::table("forms")->insert([
         "id" => "19",
         "name" => "Evaluacion de la accion tutorial",
         "description" => "Formulario sobre la Evaluacion de la accion tutorial",
      ]);
    }
}

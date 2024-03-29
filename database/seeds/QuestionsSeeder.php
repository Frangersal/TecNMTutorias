<?php

//namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Question;
use App\Form;
use App\AnswerType;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("questions")->insert([ "id"=>"1","name"=>"Nombre","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"2","name"=>"Estatura","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"3","name"=>"Peso","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"4","name"=>"Carrera","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"5","name"=>"Fecha de Nacimiento","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"6","name"=>"Sexo","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"7","name"=>"Edad","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"8", "name"=>"Estado Civil","form_id"=>"1", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"9", "name"=>"Trabaja","form_id"=>"1", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"10","name"=>"Lugar de Nacimiento","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"11","name"=>"Domicilio Actual","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"12","name"=>"Teléfono","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"13","name"=>"Código Postal","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"14","name"=>"E-Mail","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"15", "name"=>"Tipo de vivienda","form_id"=>"1", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"16", "name"=>"La casa o departamento onde vives es","form_id"=>"1", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"17","name"=>"Numero de personas con las que vives (Parentesco)","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"18","name"=>"Nombre del Padre","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"19","name"=>"Edad (Padre)","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"20", "name"=>"Trabaja (Padre)","form_id"=>"1", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"21","name"=>"Tipo de Trabajo (Padre)","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"22","name"=>"Domicilio (Padre)","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"23","name"=>"Teléfono (Padre)","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"24","name"=>"Nombre de la Madre","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"25","name"=>"Edad (Madre)","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"26", "name"=>"Trabaja (Madre)","form_id"=>"1", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"27","name"=>"Tipo de Trabajo (Madre)","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"28","name"=>"Domicilio (Madre)","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"29","name"=>"Teléfono (Madre)","form_id"=>"1","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"30","name"=>"Nombre (1ro en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"31","name"=>"Fecha de Nacimiento (1ro en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"32", "name"=>"Sexo (1ro en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"33", "name"=>"Estudios (1ro en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"34","name"=>"Nombre (2do en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"35","name"=>"Fecha de Nacimiento (2do en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"36", "name"=>"Sexo (2do en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"37", "name"=>"Estudios (2do en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"38","name"=>"Nombre (3ro en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"39","name"=>"Fecha de Nacimiento (3ro en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"40", "name"=>"Sexo (3ro en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"41", "name"=>"Estudios (3ro en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"42","name"=>"Nombre (4to en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"43","name"=>"Fecha de Nacimiento (4t en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"44", "name"=>"Sexo (4to en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"45", "name"=>"Estudios (4to en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"46","name"=>"Nombre (5to en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"47","name"=>"Fecha de Nacimiento (5to en Nacer)","form_id"=>"2","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"48", "name"=>"Sexo (5to en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"49", "name"=>"Estudios (5to en Nacer)","form_id"=>"2", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"50","name"=>"¿A cuánto ascienden los ingresos mensuales de tu familia?","form_id"=>"3","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"51","name"=>"En caso de ser económicamente independiente ¿a cuánto asciende tu ingreso?","form_id"=>"3","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"52","name"=>"Primaria","form_id"=>"4","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"53","name"=>"Secundaria","form_id"=>"4","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"54","name"=>"Bachillerato","form_id"=>"4","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"55","name"=>"Estudios Superiores","form_id"=>"4","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"56", "name"=>"Manos y/o pies hinchados","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"57", "name"=>"Dolores en el vientre","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"58", "name"=>"Dolores de cabeza y/o vómitos","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"59", "name"=>"Pérdida del equilibrio","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"60", "name"=>"Fatiga y agotamiento","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"61", "name"=>"Pérdida de vista u oído","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"62", "name"=>"Dificultades para dormir","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"63", "name"=>"Pesadillas o terrores nocturnos a que:","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"64", "name"=>"Incontinencia (orina, heces)","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"65", "name"=>"Tartamudeos al explicarse","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"66", "name"=>"Miedos intensos ante cosas","form_id"=>"5", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"67","name"=>"¿Cómo es la relación con tu familia?","form_id"=>"6","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"68", "name"=>"¿Existen dificultades?","form_id"=>"6", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"69","name"=>"¿De qué tipo?","form_id"=>"6","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"70","name"=>"¿Qué actitud tienes con tu familia?","form_id"=>"6","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"71","name"=>"¿Cómo te relacionas con tu Padre?","form_id"=>"6","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"72","name"=>"¿Qué actitud tienes hacia tu Padre?","form_id"=>"6","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"73","name"=>"¿Cómo te relacionas con tu Madre?","form_id"=>"6","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"74","name"=>"¿Qué actitud tienes hacia tu Madre?","form_id"=>"6","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"75", "name"=>"Relación (Herman@ 1)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"76", "name"=>"Actitud (Herman@ 1)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"77", "name"=>"Relación (Herman@ 2)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"78", "name"=>"Actitud (Herman@ 2)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"79", "name"=>"Relación (Herman@ 3)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"80", "name"=>"Actitud (Herman@ 3)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"81", "name"=>"Relación (Herman@ 4)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"82", "name"=>"Actitud (Herman@ 4)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"83", "name"=>"Relación (Herman@ 5)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"84", "name"=>"Actitud (Herman@ 5)","form_id"=>"7", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"85", "name"=>"¿Con quién te sientes más ligado afectivamente?","form_id"=>"8", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"86","name"=>"Especificar por qué","form_id"=>"8","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"87", "name"=>"¿Quién se ocupa más directamente de tu educación?","form_id"=>"8", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"88","name"=>"¿Quién ha influido más en tu decisión para estudiar esta carrera?","form_id"=>"8","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"89","name"=>"Consideras importante facilitar algún otro dato sobre tu ambiente familiar","form_id"=>"8","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"90", "name"=>"¿Cómo es tu relación con los compañeros?","form_id"=>"9", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"91","name"=>"¿Por qué?","form_id"=>"9","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"92","name"=>"¿Cómo es tu relación con tus amigos?","form_id"=>"9","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"93", "name"=>"¿Tienes pareja?","form_id"=>"9", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"94", "name"=>"¿Cómo es tu relación con tu pareja?","form_id"=>"9", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"95", "name"=>"¿Cómo es tu relación con las autoridades académicas?","form_id"=>"9", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"96","name"=>"¿Qué haces en tu tiempo libre?","form_id"=>"9","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"97","name"=>"¿Cuál es tu actividad recreativa?","form_id"=>"9","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"98", "name"=>"Puntual","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"99", "name"=>"Tímido/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"100", "name"=>"Alegre","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"101", "name"=>"Agresivo/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"102", "name"=>"Abierto/a a las ideas de otros","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"103", "name"=>"Reflexivo/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"104", "name"=>"Constante","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"105", "name"=>"Optimista","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"106", "name"=>"Impulsivo/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"107", "name"=>"Silencioso/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"108", "name"=>"Generoso/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"109", "name"=>"Inquieto/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"110", "name"=>"Cambios de humor ","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"111", "name"=>"Dominante","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"112", "name"=>"Egoísta","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"113", "name"=>"Sumiso/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"114", "name"=>"Confiado/a en si mismo/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"115", "name"=>"Imaginativo/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"116", "name"=>"Con iniciativa propia","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"117", "name"=>"Sociable","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"118", "name"=>"Responsable","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"119", "name"=>"Perseverante","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"120", "name"=>"Motivado/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"121", "name"=>"Activo/a","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"122", "name"=>"Independiente","form_id"=>"10", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"123","name"=>"¿Cómo te gustaría ser?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"124","name"=>"¿Recibes ayuda en tu casa para la realización de tareas escolares?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"125","name"=>"¿Qué problemas personales intervienen en tus estudios?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"126","name"=>"¿Cuál es tu rendimiento escolar?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"127","name"=>"Menciona las asignaturas que cursas en el semestre actual.","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"128","name"=>"¿Cuál es tu asignatura preferida? ¿Por qué?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"129","name"=>"¿Cuál es la asignatura en la que sobresales? ¿Por qué?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"130","name"=>"¿Qué asignatura te desagrada? ¿Por qué?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"131","name"=>"¿Cuál es tu asignatura con más bajo promedio del semestre anterior? ¿Por qué?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"132","name"=>"¿Por qué vienes al Tecnológico?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"133","name"=>"¿Para qué vienes al Tecnológico?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"134","name"=>"¿Qué te motiva para venir al Tecnológico?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"135","name"=>"¿Cuál es tu promedio general del ciclo anterior?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"136", "name"=>"¿Tienes asignaturas reprobadas?","form_id"=>"11", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"137","name"=>"¿Cuales?","form_id"=>"11","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"138","name"=>"¿Cuáles son tus planes inmediatos?","form_id"=>"12","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"139","name"=>"¿Cuáles son tus metas en la vida?","form_id"=>"12","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"140","name"=>"Nombre del entrevistador","form_id"=>"12","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"141","name"=>"Yo soy...","form_id"=>"13","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"142","name"=>"Mi carácter es...","form_id"=>"13","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"143","name"=>"A mí me gusta que...","form_id"=>"13","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"144","name"=>"Yo aspiro en la vida...","form_id"=>"13","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"145","name"=>"Yo tengo miedo que...","form_id"=>"13","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"146","name"=>"Pero pienso que podré lograr...","form_id"=>"13","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"147", "name"=>"¿Sueles dejar para el último la preparación de tus trabajos?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"148", "name"=>"¿Crees que el sueño o el cansancio te impidan estudiar eficazmente en muchas ocasiones?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"149", "name"=>"¿Es frecuente que no termines tu tarea a tiempo?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"150", "name"=>"¿Tienes a emprear tiempo en leer revistas, ver televisión o charlar cuando debieras dedicarlos a estudiar?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"151", "name"=>"Tus actividades sociales o deportivas. ¿Te llevan a descuidar, a menudo, tus tareas escolares?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"152", "name"=>"¿Sueles dejar pasar un dia o más antes de repasarlos apuntes tomados en clase?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"153", "name"=>"¿Sueles dedicar tu tiempo libre entre las 4:00 de la tarde y las 9:00 de la noche a otras actividades que no sean estudiar?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"154", "name"=>"¿Descubres algunas veces de pronto, que debes entregar una tarea antes de lo que creías?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"155", "name"=>"¿Te retrasas, con frecuencia, en una asignatura debido a que tienes que estudiar otra?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"156", "name"=>"¿Te parece que tu rendimiento es muy bajo, en relación con el tiempo que dedicas al estudio?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"157", "name"=>"¿Está situado tu escritorio directamente en frente a una ventana, puerta u otra fuente de distracción?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"158", "name"=>"¿Sueles tener fotografía, trofeos o recuerdos sobre tu mesa de cómodo?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"159", "name"=>"¿Sueles estudiar recostado en la cama o arrellanado en un asiento cómodo?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"160", "name"=>"¿Produce resplandor la lámpara que utilizas al estudiar?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"161", "name"=>"Tu mesa de estudio ¿está tan desordenada y llena de objetos, que no dispones de sitio suficiente para estudiar con eficacia?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"162", "name"=>"¿Sueles interrumpir tu estudio, por personas que vienen a visitarte?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"163", "name"=>"¿Estudias, con frecuencia, mientras tienes puesta la televisión y/o la radio?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"164", "name"=>"En el lugar donde estudias, ¿se pueden ver con facilidad revistas, fotos de jóvenes o materiales pertenecientes a tu afición?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"165", "name"=>"¿Con frecuencia, interrumpen tu estudio, actividades o ruidos que provienen del exterior?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"166", "name"=>"¿Sueles hacerse lento tu estudio debido a que no tienes a la mano los libros y los materiales necesarios?","form_id"=>"14", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"167", "name"=>"¿Tiendes a comenzar la lectura de un libro de texto sin hojear previamente los subtítulos y las ilustraciones?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"168", "name"=>"¿Te saltas por lo general las figuras, gráficas y tablas cuando estudias un tema?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"169", "name"=>"¿Suele serte difícil seleccionar los puntos de los temas de estudio?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"170", "name"=>"¿Te sorprendes con cierta frecuencia, pensando en algo que no tiene nada que ver con lo que estudias?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"171", "name"=>"¿Sueles tener dificultad en entender tus apuntes de clase cuando tratas de repasarlos, después de cierto tiempo?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"172", "name"=>"Al tomar notas, ¿te sueles quedar atrás con frecuencia debido a que no puedes escribir con suficiente rapidez?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"173", "name"=>"Poco después de comenzar un curso, ¿sueles encontrarte con tus apuntes formando un \"revoltijo\"?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"174", "name"=>"¿Tomas normalmente tus apuntes tratando de escribir las palabras exactas del docente?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"175", "name"=>"Cuando tomas notas de un libro, ¿tienes la costumbre de copiar el material necesario, palabra por Palabra?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"176", "name"=>"¿Te es difícil preparar un temario de una evaluación formulas un resumen de este?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"177", "name"=>"¿Tienes problemas para organizar los datos o el contenido de un evaluación?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"178", "name"=>"¿Al repasar el temario de una evaluación formulas un resumen de este?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"179", "name"=>"¿Te preparas a veces para una evaluación memorizando fórmulas, definiciones o reglas que no entiendes con claridad?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"180", "name"=>"¿Te resulta difícil decidir qué estudiar y cómo estudiarlo cuando preparas un evaluación?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"181", "name"=>"¿Sueles tener dificultades para organizar, en un orden lógico, las asignaturas que debes estudiar por temas?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"182", "name"=>"Al preparar evaluación, ¿sueles estudiar toda la asignatura, en el último momento?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"183", "name"=>"¿Sueles entregar tus exámenes sin revisarlos detenidamente, para ver si tienen algún error cometido por descuido?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"184", "name"=>"¿Te es posible con frecuencia terminar una evaluación de exposición de un tema en el tiempo prescrito?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"185", "name"=>"¿Sueles perder puntos en exámenes con preguntas de \"Verdadero - Falso, debido a que no lees determinante?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"186", "name"=>"¿Empleas normalmente mucho tiempo en contestar la primera mitad de la prueba y tienes que apresurarte en la segunda?","form_id"=>"15", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"187", "name"=>"Después de los primeros días o semanas del curso, ¿tiendes a perder interés por el estudio?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"188", "name"=>"¿Crees que en general, basta estudiar lo necesario para obtener un \"aprobado\" en las asignaturas.","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"189", "name"=>"¿Te sientes frecuentemente confuso o indeciso sobre cuáles deben ser tus metas formativas y profesionales?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"190", "name"=>"¿Sueles pensar que no vale la pena el tiempo y el esfuerzo que son necesarios para lograr una educación universitaria? ","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"191", "name"=>"¿Crees que es más importante divertirte y disfrutar de la vida, que estudiar?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"192", "name"=>"¿Sueles pasar el tiempo de clase en divagaciones o soñando despierto en lugar de atender al docente?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"193", "name"=>"¿Te sientes habitualmente incapaz de concentrarte en tus estudios debido a que estas inquieto, aburrido o de mal humor?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"194", "name"=>"¿Piensas con frecuencia que las asignaturas que estudias tienen poco valor practico para ti?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"195", "name"=>"¿Sientes, frecuentes deseos de abandonar la escuela y conseguir un trabajo?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"196", "name"=>"¿Sueles tener la sensación de lo que se enseña en los centros docentes no te prepara para afrontar los problemas de la vida adulta?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"197", "name"=>"¿Sueles dedicarte a modo casual, según el estado de ánimo en que te encuentres?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"198", "name"=>"¿Te horroriza estudiar libros de textos porque son insípidos y aburridos?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"199", "name"=>"¿Esperas normalmente a que te fijen la fecha de un evaluación para comenzar a estudiar los textos o repasar tus apuntes de clases?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"200", "name"=>"¿Sueles pensar que los exámenes son pruebas penosas de las que no se puede escapar y respecto a las cuales lo que debe hacerse es sobrevivir, del modo que sea?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"201", "name"=>"¿Sientes con frecuencia que tus docentes no comprenden las necesidades de los estudiantes?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"202", "name"=>"¿Tienes normalmente la sensación de que tus docentes exigen demasiadas horas de estudio fuera de clase?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"203", "name"=>"¿Dudas por lo general, en pedir ayuda a tus docentes en tareas que te son difíciles?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"204", "name"=>"¿Sueles pensar que tus docentes no tienen contacto con los temas y sucesos de actualidad?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"205", "name"=>"¿Te sientes reacio, por lo general, a hablar con tus docentes de tus proyectos futuros, de estudio o profesionales?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"206", "name"=>"¿Criticas con frecuencia a tus docentes cuando charlas con tus compañeros?","form_id"=>"16", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"207", "name"=>"A la hora de tomar decisiones en tu vida, como proponer cosas nuevas en el trabajo, iniciar alguna actividad de ocio, o elegir un color nuevo para pintar tu casa, ¿sueles buscar la aprobación o el apoyo de las personas que te rodean?","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"208", "name"=>"Imagina que estás en una reunión social o familiar importante; adviertes que 110 vas vestido para la ocasión y que desentonas con los demás, ¿cómo te comportas?","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"209", "name"=>"Tienes muchas ganas de irte a comprar ropa y le pides a algún amigo que te acompañe. Esta persona es más alta y más atractiva que tú, y todo lo que se prueba le queda mucho mejor que a ti.","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"210", "name"=>"Un día conoces a alguien nuevo y muy interesante, estas charlando animadamente y llega el momento de hablar de ti, ¿cuál de las siguientes opciones mejor se ajusta a lo que cuentas?","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"211", "name"=>"En tu lugar de trabajo o de estudios, se está explicando algo que es completamente nuevo para ti. Llega un momento en que te das cuenta que no has entendido casi nada ¿qué haces?","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"212", "name"=>"Tener un trabajo bien remunerado y que nos guste es algo difícil de conseguir, si tuvieras que valorar tu empleo o situación laboral, ¿cómo la definirías?","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"213", "name"=>"Has tenido un día duro, has trabajado con más ahínco para finalizar una tarea en la oficina, has hecho toda las gestiones que tenías pendientes, has resuelto un par de problemas doméstivos y encima le has hecho un favor a un amigo. ¿Qué haces al llegar a ","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"214", "name"=>"En tu trabajo están buscando a una persona que represente a la empresa en un consurso del ramo. Piden una persona que cumplia unos requisitos, entre ellos, explicar bien vuestro trabajo y que haga una demostración práctica del mismo.","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"215", "name"=>"¿Con cuál de las siguientes frases sobre la buena fortuna estás más de acuerdo?","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"216", "name"=>"En una fiesta en la que no conoces a nadie excepto a los anfitriones, te presentan a un grupo de personas de aspecto interesante. ¿Cuál es tu actitud?","form_id"=>"17", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"217", "name"=>"En una reunión dificil, con un ambiente caldeado, soy capaz de hablar de confianza.","form_id"=>"18", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"218", "name"=>"Si no estoy segura de una cosa, puedo pedir ayuda fácilmente.","form_id"=>"18", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"219", "name"=>"Si alguna persona es injusta y agresiva, puedo controlar la situación con confianza.","form_id"=>"18", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"220", "name"=>"Si alguna persona se muestra irónica conmigo o con otras, puedo responder sin agresividad.","form_id"=>"18", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"221", "name"=>"Si creo que se está abusando de mi, soy capaz de denunciarlo sin alterarme.","form_id"=>"18", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"222", "name"=>"Si alguna persona me pide permiso para hacer algo que no me gusta, por ejemplo, fumar, puedo decirle que no sin sentirme culpable.","form_id"=>"18", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"223", "name"=>"Si alguna persona pide mi opinión sobre alguna cosa me siento bien dádosela, aunque no concuerde con la de los demás.","form_id"=>"18", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"224", "name"=>"Puedo conectar fácil y efectivamente con personas que considero importantes.","form_id"=>"18", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"225", "name"=>"Cuando encuentro defectos en una tienda o restaurante, soy capaz de exponerlos sin atacar a las otras personas y sin sentirme mal.","form_id"=>"18", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"226", "name"=>"Tengo toda la información necesaria sobre el programa de tutoría de mi plantel.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"227", "name"=>"Tengo todas las facilidades en mi departamento para ejercer el programa de tutoria.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"228", "name"=>"Si no entiendo algún problema de mis tutorados lo canalizo a la instancia correspondient fácilmente.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"229", "name"=>"Tengo a la mano los instrumentos necesarios para identificar las necesidades de tutoría de mis tutorados.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"230", "name"=>"La programación de asignaturas en la carrera de mis tutorados les permite asistir a las actividades de apoyo y/o cursos de mejora programados.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"231", "name"=>"Tengo buena comunicación y relaciones interpersonales con mis tutorados.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"232", "name"=>"Tengo buena comunicación con la coordinación de tutoría.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"233", "name"=>"El tiempo que tengo para preparar mis actividades tutoriales es suficiente.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"234", "name"=>"El espacio donde llevo a cabo la actividad tutorial es agradable y poseetodos los requerimientos necesarios.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"235", "name"=>"He recibido la capacitación necesaria para ejercer la tutoría.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"236", "name"=>"En mi plantel existe la actualización permanente en cuanto al programa de tuotoría.","form_id"=>"19", "answer_type_id"=>"2",]);
        DB::table("questions")->insert([ "id"=>"237","name"=>"Comentarios.","form_id"=>"19","answer_type_id"=>"1",]);
        DB::table("questions")->insert([ "id"=>"238","name"=>"¿Tienes o has tenido alguna deficiencia sensorial o funcional que te obligue a llevar aparatos o controlar tu actividad física, forma de vida? (vista, oído, movimiento, lenguaje, etc. ) ¿Cuál? ","form_id"=>"20","answer_type_id"=>"1",]);
        
    }
}

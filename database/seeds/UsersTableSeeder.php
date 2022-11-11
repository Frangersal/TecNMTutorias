<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'Admin@user.com',
            'password' => Hash::make('adminadmin'),

            'campus' => 'Instituto Tecnologico de Acapulco',
            'faculty' => 'Ingeniería en Sistemas Computacionales',
            'controlNumber' => '10321000',
            'picture' => 'images/profile_images/predeterminado.png',        
        ]);
        

        $tutor = DB::table('users')->insert([
            'name' => 'Tutor User',
            'email' => 'Tutor@user.com',
            'password' => Hash::make('tutortutor'),
            
            'campus' => 'Instituto Tecnologico de Acapulco',
            'faculty' => 'Ingeniería en Sistemas Computacionales',
            'controlNumber' => '10321001',
            'picture' => 'images/profile_images/tutor.png',
        ]);

        $student = DB::table('users')->insert([
            'name' => 'Student User',
            'email' =>'Student@user.com',
            'password' => Hash::make('studentstudent'),
            
            'campus' => 'Instituto Tecnologico de Acapulco',
            'faculty' => 'Ingeniería en Sistemas Computacionales',
            'controlNumber' => '10321002',
            'picture' => 'images/profile_images/student.png',
        ]);
        #php artisan db:seed
        
        $student = DB::table('users')->insert([
            'name' => 'Francisco',
            'email' =>'Francisco@user.com',
            'password' => Hash::make('franciscofrancisco'),
            
            'campus' => 'Instituto Tecnologico de Acapulco',
            'faculty' => 'Ingeniería en Sistemas Computacionales',
            'controlNumber' => '14321079',
            'picture' => 'images/profile_images/student.png',
        ]);

        
        $student = DB::table('users')->insert([
            'name' => 'Gerardo',
            'email' =>'Gerardo@user.com',
            'password' => Hash::make('gerardogerardo'),
            
            'campus' => 'Instituto Tecnologico de Acapulco',
            'faculty' => 'Ingeniería en Sistemas Computacionales',
            'controlNumber' => '14321080',
            'picture' => 'images/profile_images/student.png',
        ]);

        
        $student = DB::table('users')->insert([
            'name' => 'Paula',
            'email' =>'Paula@user.com',
            'password' => Hash::make('paulapaula'),
            
            'campus' => 'Instituto Tecnologico de Acapulco',
            'faculty' => 'Ingeniería Bioquímica',
            'controlNumber' => '14321081',
            'picture' => 'images/profile_images/student.png',
        ]);
        
        $student = DB::table('users')->insert([
            'name' => 'Alina',
            'email' =>'Alina@user.com',
            'password' => Hash::make('alinaalina'),
            
            'campus' => 'Instituto Tecnologico de Acapulco',
            'faculty' => 'Ingeniería en Sistemas Computacionales',
            'controlNumber' => '14321078',
            'picture' => 'images/profile_images/student.png',
        ]);
    }
}

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
        ]);

        $tutor = DB::table('users')->insert([
            'name' => 'Tutor User',
            'email' => 'Tutor@user.com',
            'password' => Hash::make('tutortutor'),
        ]);

        $student = DB::table('users')->insert([
            'name' => 'Student User',
            'email' =>'Student@user.com',
            'password' => Hash::make('studentstudent'),
        ]);
        #php artisan db:seed
    }
}

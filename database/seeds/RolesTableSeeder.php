<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['name' => 'admin' ]);
        DB::table('roles')->insert(['name' => 'tutor' ]);
        DB::table('roles')->insert(['name' => 'student' ]);
        
    }
}

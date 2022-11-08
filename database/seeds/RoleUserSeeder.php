<?php

use Database\Seeders;
use Illuminate\Database\Seeder;
use App\RoleUser;
use App\Role;
use App\User;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("role_user")->insert([ "id" => "1", "user_id" => "1",  "role_id" => "1",]);
        DB::table("role_user")->insert([ "id" => "2", "user_id" => "2",  "role_id" => "2",]);
        DB::table("role_user")->insert([ "id" => "3", "user_id" => "3",  "role_id" => "3",]);
    }
}
/*
INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) 
VALUES (NULL, '1', '1', NULL, NULL), 
(NULL, '2', '2', NULL, NULL), (NULL, '3', '3', NULL, NULL), 
(NULL, '4', '3', NULL, NULL), (NULL, '5', '3', NULL, NULL), 
(NULL, '6', '3', NULL, NULL), (NULL, '7', '3', NULL, NULL);
*/

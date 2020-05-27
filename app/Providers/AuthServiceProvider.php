<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Solo un usuario Admin y Tutor pueden ser manejadores-usuarios
        Gate::define(
            'manage-users', function($user){
            return $user->hasAnyRoles(['admin','tutor']);
        });
        //Solo un usuario Admin puede editar-usuarios
        Gate::define(
            'edit-users', function($user){
            return $user->hasRole('admin');
        });
        //Solo un usuario Admin puede eliminar-usuarios
        Gate::define(
            'delete-users', function($user){
            return $user->hasRole('admin');
        });

        //------------------ Acciones ------------------//

        //Acciones exclusivas de Administrador
        Gate::define(
            'admin-action', function($user){
            return $user->hasRole('admin');
        });

        //Acciones exclusivas de Tutor
        Gate::define(
            'tutor-action', function($user){
            return $user->hasRole('tutor');
        });

        //Acciones exclusivas de Estudiante
        Gate::define(
            'student-action', function($user){
            return $user->hasRole('student');
        });

        //Acciones exclusivas de Administrador-Tutor
        Gate::define(
            'admin-tutor-action', function($user){
            return $user->hasAnyRoles(['admin','tutor']);
        });

        //Acciones exclusivas de Tutor-Estudiante
        Gate::define(
            'tutor-student-action', function($user){
            return $user->hasAnyRoles(['tutor','student']);
        });

        // use Gate; <-- en los controladores y dentro de algun metodo
        // if(Gate::denies('-action')) { return ...}

        // Y en botones 
        // @can('-action') @endcan
    }
}

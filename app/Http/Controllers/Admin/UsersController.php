<?php
// namespace establece como sera llamado este controlador...
namespace App\Http\Controllers\Admin;
//Libreria Controller de Eloquent
use App\Http\Controllers\Controller;
//Libreria DB, util para hacer querys sql crudos
use Illuminate\Support\Facades\DB;
//Llamando a los Modelos 'Role'/Rol, 'User'/Usuario, 'Tutor'/Tutor y 'Pupil'/Pupilo
use App\Role;
use App\User;
use App\Tutor;
use App\Pupil;
//Llamando 'Gate'/Compuerta para la autorizacion de acciones de distintos usuarios
use Gate;
//Libreria que nos permite obtener objetos de la llamada HTTP
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //Funcion para verificar que el usuario haya iniciado sesion
    public function _contruct(){
        $this->middleware('auth');
    }

    //Funcion 'index', puede ser llamada desde web.php como una ruta midiante la llamada de este controlador
    public function index()
    {
        //Guardar en una variable el objeto con toda la informacion de la tabla 'user' mediante el Modelo 'User'/Usuarios 
        //Retornar la vista con el objeto almacenado en la variable '$users'
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    //Fuciones creada por defecto y no usada por el momento...
    // public function create(){ }
    // public function store(Request $request) { }
    // public function show(User $user){ }

    /** Funcion 'edit', puede ser llamada desde web.php como una ruta midiante la llamada de este controlador
     *  @param  \App\User $user, Modelo y $user el cual se usara como instancia del modelo
     *  @return object a la vista segun el Rol del usuario
     */
    public function edit(User $user)
    {
        // Si el usuario en Gate de la accion edit-users no es Admin, entonces solo recargar la pagina para que no tenga acceso
        if(Gate::denies('admin-tutor-action')){
            //Retornar a la vista 'index' correspondiente a los usuarios con el Rol 'Pupil'/Pupilos o tambien llamados Estudiantes
            return redirect(route('admin.users.index'));
        }
        //'$tutors' guardara un objeto...
        //Este, mediante el modelo 'User' obtiene 'whereHas'/'Donde tiene en la tabla relacionada' 'roles'
        $tutors = User::whereHas('roles', 
        //El dato 'name' que sea igual a 'tutor' ('whereHas' ocupa esta funcion para obtener el segundo parametro)
        function ($query) {
            $query->where('name', '=', 'tutor'); 
        })->get();
        //Guardar en una variable '$roles' el objeto con toda la informacion de la tabla 'roles'mediante el Modelo 'Role'/Rol 
        //Guardar en una variable '$pupils' el objeto con toda la informacion de la tabla 'pupils'mediante el Modelo 'Pupil'/Pupilo 
        //Retornar a la vista de 'edit' a la que tienen acceso tanto los usuarios con Rol 'Admin'/Administrador, asi como 'Tutor'/Tutor
        $roles = Role::all();
        $pupils = Pupil::all();
        return view('admin.users.edit')->with([
            //Con los objetos almacenados en las variables que fuimos llenando
            'user'=>$user,'roles'=>$roles,'tutors'=>$tutors,'pupils'=>$pupils
        ]);
    }

    /** Funcion 'update', puede ser llamada desde web.php como una ruta midiante la llamada de este controlador
     * @param \Illuminate\Http\Request $request, el cual almacena los datos dados en la vista 'index'
     * @param \App\User $user, Modelo y $user el cual se usara como instancia del modelo
     * @return object 
     */
    public function update(Request $request, User $user)
    {
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->campus = $request->campus;
        $user->faculty = $request->faculty;
        $user->controlNumber = $request->controlNumber;
        $user->picture = $request->picture;

        $user->roles()->sync($request->roles);

        //Convertir array '$arrayRole' a String y de String a Int
        $arrayRole= $request->roles;
        $stringRole= implode($arrayRole);
        $role = (int)$stringRole;

        //Id del usuario que estamos editando
        $id = $user->id;
        $nada= "puej naah";
        $tutorDefecto = 1;  

        // Segun el numero guardado en la variable '$role' sera la forma en la que continuara...
        switch ($role) {
            case 1:
                // Caso 1 = Admin; guardar y por ende editar el usuario seleccionado, redirigir a 'index'
                $user->save(); 
                return redirect()->route('admin.users.index');
                break;
            case 2:
                // Caso 2 = Tutor; guardar y por ende editar el usuario seleccionado,  
                //Necesitamos saber si el usuario es un 'tutor', consultaremos si su 'id' esta guardado en la tabla 'tutors'
                //Si la variable '$tutorExist' es nulo, entonces...
                $user->save();$tutorExist = DB::table('tutors')->whereUser_id($id)->first();
                if ($tutorExist==null) {
                    //Crearemos una nueva instancia de Tutor
                    //Guardar y por ende editar el usuario seleccionado, y retornar a la vista 'index'
                    $tutor = new Tutor([ 'description' => $nada, 'user_id'=> $id, ]); 
                    $tutor->save(); 
                    return redirect()->route('users.tutor.index');
                }
                //De lo contrario...
                else {
                    //En la variable '$tutor' guardamos el objeto con la infromacion usuario 'tutor' de la tabla 'tutors'que habiamos ya guardado en '$tutorExists'
                    //Retornar a la vista 'index'
                    $tutor = $tutorExist; 
                    return redirect()->route('users.tutor.index');
                }  break;
            case 3:
                // 3 = Student; guardar y por ende editar el usuario seleccionado, 
                //Necesitamos saber si el usuario es un 'pupil', consultaremos si su 'id' esta guardado en la tabla 'pupils'                  
                //Si la variable '$pupilExist' es nulo, entonces...
                $user->save(); 
                $pupilExist = DB::table('pupils')->whereUser_id($id)->first();
                if ($pupilExist==null) {
                    //Crearemos una nueva instancia de Pupil
                    //Guardar y por ende editar el usuario seleccionado
                    //Guardar en una variable '$tutors' el objeto con toda la informacion de la tabla 'tutors' mediante el Modelo 'Tutor'/Tutor 
                    //Retornar a la vista 'edit' con todos los parametros de las variables aca creadas
                    $pupil = new Pupil([
                        'coment' => $nada,
                        'tutor_id'=> $tutorDefecto,
                        'user_id'=> $id, ]);
                    $pupil->save();
                    $tutors = Tutor::all();
                    return view('users.pupil.asignar.edit')->with([ 'pupil'=>$pupil,'tutors'=>$tutors, ]);
                }
                //De lo contrario...
                else {
                    //En la variable '$pupil' guardamos el objeto con la infromacion usuario 'pupil' de la tabla 'pupils' que habiamos ya guardado en '$pupilExist'
                    //Guardar en una variable '$tutors' el objeto con toda la informacion de la tabla 'tutors' mediante el Modelo 'Tutor'/Tutor 
                    //Retornar a la vista 'edit' con todos los parametros de las variables aca creadas
                    $pupil = $pupilExist; 
                    $tutors = Tutor::all();
                    return view('users.pupil.asignar.edit')->with([
                        'pupil'=>$pupil,'tutors'=>$tutors,
                    ]);
                }  break;
            //En ninguna circunstancia deberia llegar aca, a menos que haya un error.
            default:
                // echo "ke pdo?! >:V";
                // var_dump($role,$id); 
                //En caso de error redirigira a 'index'
                return redirect()->route('admin.users.index');
        }
        // echo "ke pdo?! >:V por pinches dos!!!!! >=V";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {        
        //Si el usuario en Gate de la accion edit-users no es 'Admin', entonces solo recargar la pagina para que no tenga acceso
        if(Gate::denies('admin-tutor-action')){
            //Retornar a la vista 'index'
            return redirect(route('admin.users.index'));
        }
        //Eliminar el dato de la tabla 'role-user'
        //Eliminar el dato de la tabla 'user', dato que es dado del parametro de la funcion
        //Retornar a la vista 'index'
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}

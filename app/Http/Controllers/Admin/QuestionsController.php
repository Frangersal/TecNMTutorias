<?php
// namespace establece como sera llamado este controlador...
namespace App\Http\Controllers\Admin;
//Llamando a los Modelos 'Form'/Formulario, 'User'/Usuario, 'Question'/Pregunta, 'Option'/Opcion y 'AnswerType'/Tipo de pregunta
use App\Form;
use App\User;
use App\Question;
use App\Option;
use App\AnswerType;
//Libreria Controller de Eloquent
use App\Http\Controllers\Controller;
//Libreria que nos permite obtener objetos de la llamada HTTP
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    //Funcion para verificar que el usuario haya iniciado sesion
    public function _construct(){
        $this->middleware('auth');
    }

    //Funcion 'index', puede ser llamada desde web.php como una ruta midiante la llamada de este controlador
    public function index()
    {
        //Guardar en una variable el objeto con toda la informacion de la tabla 'questions' mediante el Modelo 'Question'/Pregunta 
        //Guardar en una variable el objeto con toda la informacion de la tabla 'answers_types' mediante el Modelo 'AnswerType'/Tipo de pregunta 
        //Retornar la vista con el objeto almacenado en la variable '$questions','answers_types'
        $questions = Question::all();
        $answers_types = AnswerType::all();        
        return view('admin.questions.index')->with('questions',$questions)->with('answers_types',$answers_types);
    }
    
    //Funcion 'create', puede ser llamada desde web.php como una ruta midiante la llamada de este controlador
    //Funcion de 'create' descontinuada, quedara comentada para fines educativos. xd
    //Ha sido reemplazada por la funcion 'show' de este mismo controlador
    //Por que sigues leyendo?, ya te dije que no se usa...
    /* public function create() {   echo "<br> -- ".$request; echo "<br> -- ".gettype($request);
        $answersTypes = AnswerType::all();  $forms = Form::all();
        return view('admin.questions.create')->with('forms',$forms,)->with('answers_types',$answersTypes,); }*/

    /** Funcion 'store', puede ser llamada desde web.php como una ruta midiante la llamada de este controlador
     *  @param \Illuminate\Http\Request $request, el cual almacena los datos dados en la vista 'show'
     *  @return object a la vista segun el valor del boton de la vista 'question.show'
     */
    public function store(Request $request)
    {
        //Variables donde almacenaremos datos del objeto '$request'
        //Validacion de los datos del request, se pide que el atrbuto 'txtName'
        //Crear una instancia del objeto Question, con los atributos obtenidos del objeto '$request'
        //Guardar los datos en la base de datos como un regustro nuevo
        $formId = $request->get('txtIdForm');
        $crear = $request->get('bottonVariable');

        $request->validate([
            'txtName'=>'required',
        ]);

        $question = new Question([
            'form_id' => $request->get('txtIdForm'),
            'answer_type_id' =>$request->get('txtIdAnswerType'),
            'name' => $request->get('txtName'),
        ]);

        $question->save();
        
        //Si el boton de la vista tiene el valor de ´crear´
        if ($crear == "crear") {
            //Retornar a la vista 'edit' del controlador 'admin.forms' con el parametro del '$formId'
            return redirect()->route('admin.forms.edit',[$formId]);
        } elseif ($crear == "crearIrOpcion"){
            //De lo contrario, si es igual a 'crearIrOpcion', obtener mas parametros
            //Retornar a la vista 'edit' del controlador 'admin.questions'con el parametro del '$questionId'
            $answer_type_id = $request->get('txtIdAnswerType');
            $name = $request->get('txtName');
            $queryObjQuestion = Question::where('form_id', '=', $formId)->where('answer_type_id', '=', $answer_type_id)->where('name', '=', $name)->first();
            $questionId = $queryObjQuestion['id'];
            return redirect()->route('admin.questions.edit',[$questionId]);
        }
    }

    /** Funcion 'show', puede ser llamada desde web.php como una ruta midiante la llamada de este controlador
     *  @param \Illuminate\Http\Request $request, el cual almacena los datos dados en la vista 'forms.edit'
     *  @return object a la vista segun el Rol del usuario
     */
    public function show($formId)
    {   
        // formId, tipo de pregunta,  
        $answersTypes = AnswerType::all(); 
        $form = Form::where('id', '=', $formId)->first(); 

        return view('admin.questions.show')->with('form',$form,)->with('answers_types',$answersTypes,);
    }

    /** Funcion 'show', puede ser llamada desde web.php como una ruta midiante la llamada de este controlador
     *  @param \Illuminate\Http\Request $request, el cual almacena los datos dados en la vista 'forms.edit'
     *  @return object a la vista segun el Rol del usuario
     */
    public function edit(Question $question)    
    {
        //Creando variables con los paramentros del objeto '$question'
        //Consultas donde el 'id' de la bd sea igual al 'idForm' que obtuvimos
        //Consultas donde el 'question_id' de la bd sea igual al 'idQuestion' que obtuvimos
        //Consulda con todos los registros de 'AnswerType' y 'Question'
        $idForm = $question['form_id'];
        $idQuestion = $question['id'];
        $form = Form::where('id', '=', $idForm)->first();
        $options = Option::where('question_id', '=', $idQuestion)->get(); 
        $answers_types = AnswerType::all();
        $questions = Question::all();

        //Retornar a la vista 'questions.edit' con todos los parametros que hemos juntado en las variables
        return view('admin.questions.edit')->with([
            'question'=>$question,
            'answers_types' => $answers_types,
            'form' => $form,
            'options' => $options,
        ]);
    }

    /** Funcion 'update', puede ser llamada desde web.php como una ruta midiante la llamada de este controlador
     *  @param \Illuminate\Http\Request $request, el cual almacena los datos dados en la vista 'forms.edit'
     *  @param $id
     *  @return object a la vista segun el Rol del usuario
     */
    public function update(Request $request, $id)
    {
        //Variables donde almacenaremos datos del objeto '$request'
        //Validar propiedades del '$request'
        //Creamos una instancia de 'Question' que obtendra el registro de la pregunta para actualizarla
        //Guardamos la pregunta y retornamos a la vista 'forms.edit' con el parametro de '$FormId'
        $editar = $request->get('bottonVariable');
        
        $request->validate([
            'txtIdForm'=>'required',
            'txtIdAnswerType'=>'required',
            'name'=>'required',
        ]);

        $question = Question::find($id);
        $question->form_id = $request->get('txtIdForm');
        $question->answer_type_id = $request->get('txtIdAnswerType');
        $question->name = $request->get('name');
        $question->update();
        $formId = $request->get('txtIdForm');
        $question->save();
        return redirect()->route('admin.forms.edit',[$formId]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        
        $idForm = $question['form_id'];
        //Asignar form a question
        $objForm = Form::where('id', '=', $idForm)->first(); 
        $arrayForm = json_decode($objForm, true);
        $formId = $arrayForm['id'];
        $answers_types = AnswerType::all();

        $question->delete();
        return redirect()->route('admin.forms.edit',[$formId]);

    }
}
